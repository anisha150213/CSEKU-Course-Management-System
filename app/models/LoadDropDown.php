<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/19/2017
 * Time: 1:56 PM
 */
class LoadDropDown extends MainModel{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllYearTerm(){
        $sql = "SELECT * FROM year_term";
        return $this->db->select($sql);
    }

    public function getAllYearTermById($id){
        $sql = "SELECT * FROM year_term
                WHERE id = :id";
        $data = [
            ':id' => $id
        ];
        return $this->db->select($sql, $data);
    }

    public function getAllSession(){
        $sql = "SELECT * FROM session";
        return $this->db->select($sql);
    }


}
