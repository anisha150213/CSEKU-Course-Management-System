<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/21/2017
 * Time: 9:20 AM
 */
class SyllabusModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function ddlSyllabusName(){
        $sql = "SELECT * FROM syllabus_name ORDER BY id";
        return $this->db->select($sql);
    }

    public function getSubjectByTermNameGroup($term_Year_Id, $syllabus_Name_Id, $subject_group_id)
    {
        $sql = "SELECT course.courseNumber, 
                course.courseTitle, course.credit, subject_group.group_rule
                FROM syllabus
                INNER JOIN course ON course.id = syllabus.course_Id
                INNER JOIN subject_group ON subject_group.id = syllabus.subject_group_id
                WHERE syllabus.syllabus_Name_Id = :syllabus_Name_Id
                AND syllabus.term_Year_Id = :term_Year_Id
                AND syllabus.subject_group_id = :subject_group_id";
        $data = array(
            ':syllabus_Name_Id' => $syllabus_Name_Id,
            ':term_Year_Id' => $term_Year_Id,
            ':subject_group_id' => $subject_group_id
        );

        return $this->db->select($sql,$data);


    }

    public function checkSubjectType($term_Year_Id, $syllabus_Name_Id){
        $sql = "SELECT subject_group_id FROM syllabus 
                Where syllabus.term_Year_Id = :term_Year_Id
                AND syllabus.syllabus_Name_Id = :syllabus_Name_Id
                GROUP BY syllabus.subject_group_id ";

        $data = array(
            ':term_Year_Id' => $term_Year_Id,
            ':syllabus_Name_Id' => $syllabus_Name_Id
        );

        return $this->db->select($sql, $data);
    }

    public function GetCourseByYearTermSyllabusName($term_Year_Id, $syllabus_Name_Id){
        $sql = "SELECT course.id, course.courseNumber, 
                course.courseTitle, course.credit 
                FROM syllabus
                INNER JOIN course ON course.id = syllabus.course_Id
                WHERE syllabus.term_Year_Id = :term_Year_Id
                AND syllabus.syllabus_Name_Id = :syllabus_Name_Id";

        $data = array(
            ':term_Year_Id' => $term_Year_Id,
            ':syllabus_Name_Id' => $syllabus_Name_Id
        );

        return $this->db->select($sql, $data);
    }



}