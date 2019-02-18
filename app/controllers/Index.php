<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
//        Session::checkSession();
    }

    public function Index(){
        $this->home();
    }

    public function home(){


        $pageName = ['pageName' => 'home'];
        $this->load->view("header", $pageName);

        $simpleModel = $this->load->model('SimpleModel');
        $status = $simpleModel->getOpenRegistrationCurrentDate();
        if(empty($status)){
            $get = $simpleModel->getAll('open_registration');
            $id = $get[0]['id'];
            $cond = "id = $id";
            $data = [
                'is_open' => '0'
            ];
            $res = $simpleModel->update('open_registration', $data, $cond);
        }

        $this->load->view("home");
        $this->load->view("footer");
    }
}
