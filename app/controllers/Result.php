<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/28/2017
 * Time: 2:50 PM
 */

class Result extends MainController{
    public function __construct(){
        parent::__construct();
        Session::checkSession('Teacher');
    }

    public function index(){
        self::main();
    }

    public function main($userID = false){
        If($userID == false){
            header('Location:'.BASE_URL);
        }else{
            $pageName = ['pageName' => 'Result'];
            $this->load->view('header', $pageName);

            $simpleModel = $this->load->model('SimpleModel');
            $registerCourseModel = $this->load->model('RegisterCourseModel');
            $termList = $registerCourseModel->getTermListByUserId($userID);
            $data['finale'] = [];
            foreach ($termList as $key => $value){
                $result = [];
                $course = $registerCourseModel->getCourseListByTermIdUserIdApprove($value['term_year_id'], $userID);
                if(!empty($course)){
                    $termId = $value['term_year_id'];
                    $cond = "id = $termId";
                    $termDetail = $simpleModel->getAll('year_term', $cond);
                    array_push($result, $termDetail);

                    array_push($result, $course);

                    $totalCreditTaken = $registerCourseModel->getSumOfCreditByTermIdUserIdApprove($value['term_year_id'], $userID);
                    array_push($result, $totalCreditTaken);

                    $creditCompleted = $registerCourseModel->getSumOfCreditCompetedByTermIdUserId($value['term_year_id'], $userID);
                    $sum = 0;
                    foreach ($course as $k => $v){
                        $sum = $sum + (int)$v['credit'] * (int)$v['result'];
                    }
                    if($creditCompleted[0]['SUM(course.credit)'] == null){
                        $creditCompleted[0]['SUM(course.credit)'] = '0';
                        $res = 0;
                    }else{
                        $res = $sum / (int)$creditCompleted[0]['SUM(course.credit)'];
                    }
                    array_push($result, $creditCompleted );
                    array_push($result, $res);

                    array_push($data['finale'], $result);
                }
            }
            $cond = "user_id = $userID";
            $data['student'] = $simpleModel->getAll('student',$cond);

            $this->load->view('admin/result',$data);
            $this->load->view('footer');
        }
    }

}