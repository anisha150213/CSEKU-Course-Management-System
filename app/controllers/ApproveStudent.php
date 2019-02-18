<?php
/**
 * Created by PhpStorm.
 * User: Akib
 * Date: 10/26/2017
 * Time: 9:40 AM
 */

class ApproveStudent extends MainController{
    public function __construct(){
        parent::__construct();
        Session::checkSession('Teacher');
    }

    public function index(){
        self::main();
    }

    public function main($userId = false){
        if($userId == false){
            header('Location:'.BASE_URL);
        }else{
            $pageName = ['pageName' => 'Approve Student'];
            $studentModel = $this->load->model('StudentModel');
            $registerCourseModel = $this->load->model('RegisterCourseModel');
            $data['student'] = $studentModel->GetStudentDetailByUserId($userId);
            $data['course'] = $registerCourseModel->getCourseListByTermIdUserId($data['student'][0]['year_term_id'], $data['student'][0]['user_id']);
            if($registerCourseModel->getRetakeCoureByUserId($userId)){
                $data['retake'] = $registerCourseModel->getRetakeCoureByUserId($userId);
            }
            $this->load->view('header', $pageName);
            $this->load->view('admin/approvestudent',$data);
            $this->load->view('footer');
        }
    }

    public function updateCB(){
        $id = $_POST['id'];
        $userId = $_POST['user_id'];
        $cb = '0';
        if(isset($_POST['cb'])){
            $cb = '1';
        }
        $simpleModel = $this->load->model('SimpleModel');
        $cond = "id = $id";
        $data = [
            'is_approve' => $cb
        ];
        $res = $simpleModel->update('course_registration', $data, $cond);
        if($res){
            header('Location:'.BASE_URL.'/ApproveStudent/main/'.$userId);
        }else{
            var_dump($res);
        }
    }
}