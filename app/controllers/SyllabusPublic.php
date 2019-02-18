<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/23/2017
 * Time: 9:01 AM
 */
class SyllabusPublic extends MainController {

    public function __construct(){
        parent::__construct();
    }

    public function Index(){
        self::syllabus();
    }

    public  function  syllabus(){
        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');

        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();

        array_push($data, $term);
        array_push($data, $syllabusName);

        $subjectType = $syllabusModel->checkSubjectType(1, 1);
        $numberOfSubjectType = count($subjectType);

        for ($i = 0; $i < $numberOfSubjectType; $i++ ){
            $tableData = $syllabusModel->getSubjectByTermNameGroup(1, 1, $subjectType[$i]['subject_group_id']);
            array_push($data, $tableData);
        }
        $this->load->view("syllabus", $data);
        $this->load->view("footer");
    }

    public function search(){
        $yearTerm = $_POST['ddlYearTerm'];
        $syllabus = $_POST['ddlSyllabusName'];

        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');

        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();

        array_push($data, $term);
        array_push($data, $syllabusName);

        $subjectType = $syllabusModel->checkSubjectType($yearTerm, $syllabus);
        $numberOfSubjectType = count($subjectType);

        for ($i = 0; $i < $numberOfSubjectType; $i++ ){
            $tableData = $syllabusModel->getSubjectByTermNameGroup($yearTerm, $syllabus, $subjectType[$i]['subject_group_id']);
            array_push($data, $tableData);
        }
        $data['term'] = $yearTerm;
        $data['syllabusName'] = $syllabus;
        $this->load->view("syllabus", $data);
        $this->load->view("footer");

    }
}
