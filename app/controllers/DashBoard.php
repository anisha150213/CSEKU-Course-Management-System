<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/26/2017
 * Time: 12:32 AM
 */

class DashBoard extends MainController{
    public function __construct(){
        parent::__construct();
        Session::checkSession('Teacher');
    }

    public function index(){
        self::main();
    }

    public function main($msg = false){
        $data = null;
        if($msg){
            $data['msg'] = $msg;
        }
        Session::init();
        $data['username'] = Session::get('username');

        $simpleModel = $this->load->model('SimpleModel');
        $data['is_open'] = $simpleModel->getOne('open_registration');
        $cond = "ORDER BY session.sessionNumber DESC";
        $data['session'] = $simpleModel->getAllOrder('session', $cond);

        $pageName = ['pageName' => 'Admin Dashboard'];
        $this->load->view('header', $pageName);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('footer');
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
                    header("Location: ".BASE_URL."/Dashboard/main/Password changed successfully");
                }
            }else {
                header("Location: ".BASE_URL."/Dashboard/main/Password  missmatched");
            }
        }else {
            header("Location: ".BASE_URL."/Dashboard/main/Give correct password");
        }
    }

    public function openRegistration(){
        $simpleModel = $this->load->model('SimpleModel');
        $id = $_POST['id'];
        $startDate = $_POST['start_date'];
        $endDate = $_POST['end_date'];
        $cond = "id = $id";
        $data = [
            'is_open' => '1',
            'start_date' => $startDate,
            'end_date' => $endDate
        ];
        $res = $simpleModel->update('open_registration', $data, $cond);
        if($res){
            header('Location:'.BASE_URL.'/dashboard');
        }else{
            var_dump($res);
        }
    }

    public function closeRegistration($id){
        $simpleModel = $this->load->model('SimpleModel');
        $cond = "id = $id";
        $data = [
            'is_open' => '0'
        ];
        $res = $simpleModel->update('open_registration', $data, $cond);
        if($res){
            header('Location:'.BASE_URL.'/dashboard');
        }else{
            var_dump($res);
        }
    }

    public function addNewSession(){
        $session = $_POST['session_name'];
        $simpleModel = $this->load->model('SimpleModel');
        $data = [
            'sessionNumber' => $session
        ];
        $res = $simpleModel->insert('session', $data);
        if($res){
            header('Location:'.BASE_URL.'/dashboard');
        }else{
            var_dump($res);
        }

    }

    public function updateSession(){
        $id = $_POST['id'];
        $session = $_POST['session'];
        $simpleModel = $this->load->model('SimpleModel');
        $cond = "id = $id";
        $data = [
          'sessionNumber' => $session
        ];
        $res = $simpleModel->update('session', $data, $cond);
        if($res){
            header('Location:'.BASE_URL.'/dashboard');
        }else{
            var_dump($res);
        }
    }

}