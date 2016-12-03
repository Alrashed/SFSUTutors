<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php

class Login extends Controller
{
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function loginStudent() 
    {
        if (isset($_GET["loginstudent"])) {
//            $email = $_POST["email"];
//            $password = $_POST["password"];
//            $salt = "saltedpass4team4";
//            $saltedpassword = md5($salt . $password);
            
            $student=$this->model->loginStudent($_GET["email"],  $_GET["password"]);

            if (($student->email) == ($_GET["email"])) {
                $_SESSION['loggedInStudent_id'] = $student->student_id;
                $_SESSION['email'] = $student->email;
                header('location: ' . URL . 'home');
            } 
//            else {
//                header('location: ' . URL . 'login?msg=failed');
//            }
        }
    }
    
    public function loginTutor() 
    {
        if (isset($_GET["logintutor"])) {
//            $email = $_POST["email"];
//            $password = $_POST["password"];
//            $salt = "saltedpass4team4";
//            $saltedpassword = md5($salt . $password);
            
            $tutor=$this->model->loginTutor($_GET["email"],  $_GET["password"]);

            if (($tutor->email) == ($_GET["email"])) {
                $_SESSION['loggedInTutor_id'] = $tutor->tutor_id;
                $_SESSION['email'] = $tutor->email;
                header('location: ' . URL . 'home');
            } 
//            else {
//                header('location: ' . URL . 'login?msg=failed');
//            }
        }
    }
}