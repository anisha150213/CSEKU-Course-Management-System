<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/11/2017
 * Time: 8:39 AM
 */
class SimpleModel extends MainModel {
    public function __construct(){
        parent::__construct();
    }

    public function getAll($table, $cond = false){
        if($cond){
            $sql = "SELECT * FROM $table WHERE $cond";
        }else{
            $sql = "SELECT * FROM $table";
        }
        return $this->db->select($sql);
    }

    public function getAllOrder($table, $cond){
        $sql = "SELECT * FROM $table $cond";

        return $this->db->select($sql);
    }

    public function getOne($table, $cond = false){
        if($cond){
            $sql = "SELECT * FROM $table WHERE $cond LIMIT 1";
        }else{
            $sql = "SELECT * FROM $table";
        }
        return $this->db->select($sql);
    }


    public function insert($table, $data){
        return $this->db->insert($table, $data, true);
    }

    public function update($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function delete($table, $cond)
    {
        return $this->db->delete($table, $cond);
    }

    public function getMaxId($table){
        $sql = "SELECT MAX(id) FROM $table";
        return $this->db->select($sql);
    }

    public function getOpenRegistrationCurrentDate(){
        $sql =" SELECT * FROM open_registration 
                WHERE open_registration.is_open = '1'
                AND open_registration.end_date > CURDATE()";
        return $this->db->select($sql);
    }
}
