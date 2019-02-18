<?php

class MainModel{
    protected $db = array();
    public function __construct(){
        $dsn = 'mysql:dbname=cseku_17_course; host=localhost';
        $user = 'root';
        $pass = '';
        $this->db = new Database($dsn,$user,$pass);
    }

}