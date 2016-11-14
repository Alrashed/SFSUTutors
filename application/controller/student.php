<?php

class Student extends Controller
{
    public function register()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/student/register.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function registerStudent()
    {
        if (isset($_POST["submit"])) {

            $this->model->createStudent($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["birthdate"], $_POST["phone"]);
        }
        
        header('location: ' . URL . 'login/index');
    }
    
    public function deleteStudent($student_id)
    {
        if (isset($student_id)) {
            
            $this->model->deleteStudent($student_id);
        }

        header('location: ' . URL . 'home/index');
    }
}