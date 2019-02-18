<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/26/2017
 * Time: 9:29 AM
 */
class AccountManage extends MainController{
    public  function __construct(){
        parent::__construct();
        Session::checkSession('Student');
    }

    public function Index(){
        self::accountManage();
    }

    public function accountManage($msg = false){
    	$userModel = $this->load->model('UserModel');
    	$userName = $userModel->getUserName();
    	$studentModel = $this->load->model('StudentModel');
    	$studentDetail = $studentModel->GetStudentDetailByUserName($userName);

        $loadDDL = $this->load->model('loadDropDown');
        array_push($studentDetail, $loadDDL->getAllYearTerm());

        $data = ['pageName' => 'Account Manage'];

        $this->load->view("header", $data);
        if($msg != false){
            array_push($studentDetail, $msg);
        }
        $simpleModel = $this->load->model('SimpleModel');
        $studentDetail['isOpen'] = $simpleModel->getAll('open_registration');
        $this->load->view("student/accountmanage", $studentDetail);

        $this->load->view("footer");

    }

    public function changePassword(){
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        $userModel = $this->load->model('UserModel');

        if(md5($currentPassword) == $userModel->getPassword()){
            if($newPassword == $confirmPassword){
                $data = [
                    'password' => md5($newPassword)
                ];
                $statePasswordUpdate = $userModel->UpdatePassword($data);
                if($statePasswordUpdate == true){
                    header("Location: ".BASE_URL."/AccountManage/accountManage/Password changed successfully");
                }
            }else {
                header("Location: ".BASE_URL."/AccountManage/accountManage/Password  missmatched");
            }
        }else {
            header("Location: ".BASE_URL."/AccountManage/accountManage/Give correct password");
        }
    }

    public function changeMobile()
    {
        $newMobile= $_POST['newMobile'];
        $currentPassword = md5($_POST['currentPassword_2']);

        if(Session::get('password') == $currentPassword){
            $studentModel = $this->load->model('StudentModel');
            $data = [
                'mobile' => $newMobile
            ];
            $status = $studentModel->updateStudent($data);
            if($status == true){
                header("Location: ".BASE_URL."/AccountManage/accountManage/Mobile changed successfully");
            }
            else {
                header("Location: ".BASE_URL."/AccountManage/accountManage/Something went wrong");
            }
        }else {
            header("Location: ".BASE_URL."/AccountManage/accountManage/Wrong password");
        }
    }

    public function changeEmail()
    {
        $newEmail= $_POST['newEmail'];
        $currentPassword = md5($_POST['currentPassword_3']);

        if(Session::get('password') == $currentPassword){
            $studentModel = $this->load->model('StudentModel');
            $data = [
                'email' => $newEmail
            ];
            $status = $studentModel->updateStudent($data);
            if($status == true){
                header("Location: ".BASE_URL."/AccountManage/accountManage/Email changed successfully");
            }
            else {
                header("Location: ".BASE_URL."/AccountManage/accountManage/Something went wrong");
            }
        }else {
            header("Location: ".BASE_URL."/AccountManage/accountManage/Wrong password");
        }
    }

    public function changeYearTerm()
    {
        $ddlYearTerm = $_POST['ddlYearTerm'];
        $currentPassword = md5($_POST['currentPassword_4']);

        if(Session::get('password') == $currentPassword){
            $studentModel = $this->load->model('StudentModel');
            $data = [
                'year_term_id' => $ddlYearTerm
            ];
            $status = $studentModel->updateStudent($data);
            if($status == true){
                header("Location: ".BASE_URL."/AccountManage/accountManage/Year Term changed successfully");
            }
            else {
                header("Location: ".BASE_URL."/AccountManage/accountManage/Something went wrong");
            }
        }else {
            header("Location: ".BASE_URL."/AccountManage/accountManage/Wrong password");
        }
    }
}
