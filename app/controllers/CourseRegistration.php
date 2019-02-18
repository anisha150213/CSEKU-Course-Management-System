<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/27/2017
 * Time: 5:03 PM
 */
 //TODO: Have to hanndle Retake Coursers
 //TODO: Have to hanndle over 4-2 terms

class CourseRegistration extends MainController{
    public function __construct(){
        parent::__construct();
        Session::checkSession('Student');
    }

    public function Index(){
        self::courseRegistration();
    }

    public function courseRegistration($syllName = 1){
        if(isset($_POST['ddlSyllabus'])){
            $syllName = $_POST['ddlSyllabus'];
        }

        $simpleModel = $this->load->model('SimpleModel');

        Session::init();
        $userId = Session::get('id');

        $studentModel = $this->load->model('StudentModel');
        $studentDetail = $studentModel->GetStudentDetailByUserId($userId);

        $term  = $studentDetail[0]['year_term_id'];

        $data = ['pageName' => 'Course Registration'];
        $this->load->view('header', $data);

        $loadDDL = $this->load->model('LoadDropDown');
        array_push($data,$loadDDL->getAllYearTerm());

        $syllabusModel = $this->load->model('SyllabusModel');
        array_push($data, $syllabusModel->ddlSyllabusName());

        $courseList = $syllabusModel->GetCourseByYearTermSyllabusName($term, $syllName);
        array_push($data, $courseList);
        $data['term'] = $term;
        $data['syllabusName'] = $syllName;


        $cond = "user_id = $userId";
        $res = $simpleModel->getAll('retake_list', $cond);
        if($res){
            $registerCourseModel = $this->load->model('RegisterCourseModel');

            $data['retake'] = $registerCourseModel->getRetakeCoureByUserId($userId);
        }

        $data['isOpen'] = $simpleModel->getAll('open_registration');

        $this->load->view('student/courseregistration',$data);
        $this->load->view('footer');
    }

    public function courseValidation()
    {
        $courseData = [];
        $yearTermId = $_POST['yearTermId'];
        unset($_POST['yearTermId']);

        $postData = array_chunk($_POST, 2);

        foreach ($postData as $key => $value) {
            if($value[0] != 0){
                $courseData[$key] =$value;
            }
        }

        Session::init();
        $registerCourseModel = $this->load->model('RegisterCourseModel');

        foreach ($courseData as $key => $value) {
            $type = NULL;
            if($courseData[$key][1] == 1){
                $type = 'Fresh';
            } elseif ($courseData[$key][1] == 2) {
                $type = 'Retake';
            } elseif ($courseData[$key][1] == 3) {
                $type = 'Re-retake';
            }
            $data = [
                'user_id' => Session::get('id'),
                'course_id' => $courseData[$key][0],
                'term_year_id' => $yearTermId,
                'result' => 0,
                'type' => $type
            ];
            $insetResult = $registerCourseModel->insertRegisterCourse($data);
        }
        header("Location: ".BASE_URL."/MyCourses");
    }
}
