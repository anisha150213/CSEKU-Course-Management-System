<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/28/2017
 * Time: 11:35 AM
 */
class RegisterCourseModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function insertRegisterCourse($data){
        $table = 'course_registration';
        return $this->db->insert($table,$data);
    }

    public function getTermListByUserId($userId = false)
    {
        $sql = "SELECT course_registration.term_year_id
                FROM course_registration
                WHERE course_registration.user_id = :user_id
                GROUP BY course_registration.term_year_id";
        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getCourseListByTermIdUserId($termId, $userId = false)
    {
        $sql = "SELECT course_registration.id, course.courseNumber, course.courseTitle, course.credit, course_registration.is_approve, course_registration.type 
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id";

        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getCourseListByTermIdUserIdNotApprove($termId, $userId = false)
    {
        $sql = "SELECT course_registration.id, course.courseNumber, course.courseTitle, course.credit, course_registration.is_approve
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id
                AND course_registration.is_approve = '0' ";

        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getCourseListByTermIdUserIdApprove($termId, $userId = false)
    {
        $sql = "SELECT course_registration.id, course.id AS course_id, course.courseNumber, course.courseTitle, course.credit, course_registration.is_approve,
                course_registration.type, course_registration.result 
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id
                AND course_registration.is_approve = '1' ";

        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getSumOfCreditByTermIdUserId($termId, $userId = false)
    {
        $sql = "SELECT SUM(course.credit)
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id";
        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getSumOfCreditByTermIdUserIdApprove($termId, $userId = false)
    {
        $sql = "SELECT SUM(course.credit)
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id
                AND course_registration.is_approve = '1'";
        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getSumOfCreditCompetedByTermIdUserId($termId, $userId = false)
    {
        $sql = "SELECT SUM(course.credit)
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.result != '-1'
                AND course_registration.result != '0'
                AND course_registration.user_id = :user_id";
        if($userId == false){
            Session::init();
            $userId = Session::get('id');
        }
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }



    public function getRetakeCoureByUserId($userId){
        $sql = "SELECT course.id, course.courseNumber, course.courseTitle, course.credit
                FROM retake_list 
                INNER JOIN course ON course.id = retake_list.course_id
                WHERE retake_list.user_id = $userId";
        return $this->db->select($sql);
    }

}
