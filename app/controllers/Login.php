<?php

/**
 * Login Controller
 */
class Login extends MainController
{
    public function __construct(){
        parent::__construct();

    }

    public function Index(){
        $this->login();
    }

    public function login($data = false){
        Session::init();
        if(Session::get("login") == true ){
            header("Location: ".BASE_URL."/Index/accountManage");
        } else {
            $data = ['pageName' => 'Log in'];
            $this->load->view("header", $data);
            $this->load->view("login/login", $data);
            $this->load->view("footer");
        }
    }

    public function loginAuth(){
        if (isset($_POST['btn_login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $table = "user";
            $loginModel = $this->load->model("LoginModel");
            $loginData  = $loginModel->getIdByUserNamePass($username, $password, $table);
            if(!empty($loginData)) {
                Session::init();
                Session::set('login', 'true');
                Session::set('username', $loginData[0]['user_name']);
                Session::set('id',  $loginData[0]['id']);
                Session::set('user_role',  $loginData[0]['user_role']);
                Session::set('password',  $loginData[0]['password']);
                if($loginData[0]['user_role'] == 'Teacher'){
                    header("Location: ".BASE_URL."/dashboard");
                } else {
                    header("Location: ".BASE_URL."/AccountManage");
                }
            }else{
                header("Location: ".BASE_URL."/Login");
            }
        }
    }

    public function logOut(){
        Session::init();
        Session::destroy();
        header("Location: ".BASE_URL."/Login");
    }
}
