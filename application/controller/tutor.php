<?php

class Tutor extends Controller
{
    public function register()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/tutor/register.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function registerTutor()
    {
        if (isset($_POST["submit"])) {

            $this->model->createTutor($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["birthdate"], $_POST["phone"], $_POST["major"], $_POST["gpa"], $_POST["about"], $_POST["available"], $_POST["offering"], $_POST["price"]);
        }
        
        header('location: ' . URL . 'login/index');
    }
    
    public function viewTutor($tutor_id) 
    {
        if (isset($tutor_id)) {
            
            $tutorPage = $this->model->getTutorPage($tutor_id);
            
            require APP . 'view/_templates/header.php';
            require APP . 'view/tutor/view.php';
            require APP . 'view/_templates/footer.php';
        }
    }
    
    public function deleteTutor($tutor_id)
    {
        if (isset($tutor_id)) {
            
            $this->model->deleteTutor($tutor_id);
        }

        header('location: ' . URL . 'home/index');
    }
}
