<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/26/2017
 * Time: 9:31 AM
 */
class StudentModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function GetStudentDetailByUserName($userName){
    	$sql = "SELECT student.user_id, user.user_name,student.first_name, student.middle_name,
    	student.last_name, student.student_id, student.email, student.mobile,
		year_term.year, year_term.term, session.sessionNumber, student.year_term_id
		FROM student
		INNER JOIN user ON student.user_id = user.id
		INNER JOIN year_term ON student.year_term_id = year_term.id
		INNER JOIN session ON student.session_Id = session.id
		WHERE user.user_name = :user_name";
		$data = array(
			':user_name' => $userName
			 );

		return $this->db->select($sql, $data);
    }

    public function GetAllStudentDetail(){
        $sql = "SELECT student.user_id, user.user_name,student.first_name, student.middle_name,
    	student.last_name, student.student_id, student.email, student.mobile,
		year_term.year, year_term.term, session.sessionNumber, student.year_term_id
		FROM student
		INNER JOIN user ON student.user_id = user.id
		INNER JOIN year_term ON student.year_term_id = year_term.id
		INNER JOIN session ON student.session_Id = session.id";

        return $this->db->select($sql);
    }

    public function GetStudentDetailByUserId($userId){
        $sql = "SELECT student.user_id, user.user_name,student.first_name, student.middle_name,
    	student.last_name, student.student_id, student.email, student.mobile,
		year_term.year, year_term.term, session.sessionNumber, student.year_term_id
		FROM student
		INNER JOIN user ON student.user_id = user.id
		INNER JOIN year_term ON student.year_term_id = year_term.id
		INNER JOIN session ON student.session_Id = session.id
		WHERE student.user_id = $userId";

        return $this->db->select($sql);
    }

    public function updateStudent($data){
        $id = Session::get('id');
        $cond = "user_id = $id";
        $table = 'student';
        return $this->db->update($table, $data, $cond);
    }
}
