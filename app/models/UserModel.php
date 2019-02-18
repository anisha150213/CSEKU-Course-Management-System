<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/20/2017
 * Time: 6:10 PM
 */
class UserModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function getUserByUserName($user_name){
        $sql = "SELECT * FROM user WHERE user_name = :user_name";
        $data = array(
            ':user_name' => $user_name
        );
        return $this->db->select($sql, $data);
    }

    public function insertIntoUser($data){
        return $this->db->insert('user', $data, true);
    }

    public function insertIntoStudent($data){
        return $this->db->insert('student', $data);
    }

    public function UpdatePassword($data){
        $id = self::getUserId();
        $cond = "id = $id";
        $table = 'user';
        if($this->db->update($table, $data, $cond)){
            Session::set("password", $data['password']);
            return true;
        }else {
            return false;
        }
    }

    public function getUserName()
    {
        Session::init();
        return Session::get('username');
    }

    public function getUserRole()
    {
        Session::init();
        return Session::get('user_role');
    }

    public function getUserId()
    {
        Session::init();
        return Session::get('id');
    }

    public function getPassword()
    {
        Session::init();
        return Session::get('password');
    }
}
