<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/26/2017
 * Time: 7:27 AM
 */

class StudentList extends MainController{

    public function __construct(){
        parent::__construct();
        Session::checkSession('Teacher');
    }

    public function index(){
        self::main();
    }

    public function main(){
        $pageName = ['pageName' => 'Student List'];
        $studentModel = $this->load->model('StudentModel');
        $registerCourseModel = $this->load->model('RegisterCourseModel');
        $data['table'] = $studentModel->GetAllStudentDetail();
        foreach ($data['table'] as $key => $value){
            $course = $registerCourseModel->getCourseListByTermIdUserIdNotApprove($value['year_term_id'], $value['user_id']);
            if($course != false){
                $data['table'][$key]['have_course'] = '1';
            }else{
                $data['table'][$key]['have_course'] = '0';
            }
        }

        $this->load->view('header', $pageName);
        $this->load->view('admin/studentlist', $data);
        $this->load->view('footer');
    }

}