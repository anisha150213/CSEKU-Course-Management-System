<?php
/**
 *
 */
 //TODO: Retake list not handdeled
class MyCourses extends MainController
{

    public function __construct()
    {
        parent::__construct();
        Session::checkSession('Student');
    }

    public function Index()
    {
        self::myCourses();
    }

    public function myCourses($term = 1)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $term = $_POST['ddlYearTerm'];
        }else{
            $studentModel = $this->load->model('StudentModel');
            Session::init();
            $userId = Session::get('id');
            $student = $studentModel->GetStudentDetailByUserId($userId);
            $term = $student[0]['year_term_id'];
        }
        $registerCourseModel = $this->load->model('RegisterCourseModel');
        $termList = $registerCourseModel->getTermListByUserId();
        $loadDDL = $this->load->model('LoadDropDown');
        $termName = [];
        foreach ($termList as $key => $value) {
            $termName = array_merge($termName,$loadDDL->getAllYearTermById($termList[$key]['term_year_id']));
        }

        $data = ['pageName' => 'My Courses'];
        $this->load->view('header', $data);

        array_push($data, $termName);
        array_push($data, $registerCourseModel->getCourseListByTermIdUserId($term));
        array_push($data, $registerCourseModel->getSumOfCreditByTermIdUserId($term));
        $data['term'] = $term;

        $this->load->view('student/myCourse', $data);

        $this->load->view('footer');
    }

    public function delete(){
        $id = $_POST['id'];
        $term = $_POST['term'];
        $simpleModel = $this->load->model('SimpleModel');
        $cond = "id = $id";
        $res = $simpleModel->delete('course_registration', $cond);
        if($res){
            header('Location:'.BASE_URL.'/MyCourses/myCourses/'.$term);
        }else{
            var_dump($res);
        }
    }
}

