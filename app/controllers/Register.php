<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/19/2017
 * Time: 7:14 AM
 */
class Register extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index(){
        self::register();
    }

    public function register($error = false){
        Session::init();
        if(Session::get("login") == true ){
            header("Location: ".BASE_URL."/Index/accountManage");
        } else {
            $data = ['pageName' => 'Register New Member'];
            $this->load->view("header", $data);
            $loadDropDown = $this->load->model("LoadDropDown");
            $yearTerm = $loadDropDown->getAllYearTerm();
            $session = $loadDropDown->getAllSession();

            array_push($data, $error);
            array_push($data, $yearTerm);
            array_push($data, $session);

            $this->load->view("registration",$data);
            $this->load->view("footer");
        }
    }

    public function registerNewMember(){
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $studentId = $_POST['studentId'];
        $mobile = $_POST['mobile'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $ddlYearTerm = $_POST['ddlYearTerm'];
        $ddlSession = $_POST['ddlSession'];

        $error = [];

        if(empty($firstName)){
            array_push($error,"First Name Required");
        }
        if(empty($studentId)){
            array_push($error,"Student ID Required");
        }
        if(empty($userName)){
            array_push($error,"Username Required");
        }else{
            $userModel = $this->load->model('UserModel');
            $id = $userModel->getUserByUserName($userName);
            if(!empty($id)){
                array_push($error, "Username already exist. please select another one");
            }
        }
        if(empty($password)){
            array_push($error,"Password Required");
        }
        if(empty($confirmPassword)){
            array_push($error,"Password confirmation Required");
        }
        if($ddlYearTerm == '0'){
            array_push($error, "Please select year-term");
        }
        if($ddlSession == '0'){
            array_push($error, "Please select session");
        }
        if($password != $confirmPassword){
            array_push($error, "Password miss matched");
        }
        if(!empty($error)){
            self::register($error);
        }
        else{
            $data = array(
                'user_name' => $userName,
                'password' => md5($password),
                'user_role' => 'Student'
            );
            $lastId = $userModel->insertIntoUser($data);
            if($lastId != false){
                unset($data);
                $data = array(
                    'user_id' => $lastId,
                    'first_name' => $firstName,
                    'middle_name' => $middleName,
                    'last_name' => $lastName,
                    'student_id' => $studentId,
                    'email' => $email,
                    'mobile' => $mobile,
                    'year_term_id' => $ddlYearTerm,
                    'session_id' => $ddlSession
                );
                $msg = $userModel->insertIntoStudent($data);
                if($msg != false){


                    $data = ['pageName' => 'Log in'];
                    $this->load->view("header", $data);
                    $success_msg = ['success' => 'Registration Successful. Now you can log in'];
                    $this->load->view("login/login", $success_msg);
                    $this->load->view("footer");

                    header("Location: ".BASE_URL."/Login/login/".$success_msg);
                } else{
                    array_push($error, "Something went wrong. please try again later");
                    self::register($error);
                }
            } else{

                array_push($error, "Something went wrong. please try again later");
                self::register($error);
            }

        }
    }
}