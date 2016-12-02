<?php
if(!isset($_SESSION)) {
    session_start();
}

?>

<?php

class Booking extends Controller
{
    public function index() 
    {
        if(isset($_SESSION['loggedInStudent_id'])) {
            
            require APP . 'view/_templates/header.php';
            require APP . 'view/booking/index.php';
            require APP . 'view/_templates/footer.php';
        } else {
            
            require APP . 'view/_templates/header.php';
            require APP . 'view/login/index.php';
            require APP . 'view/_templates/footer.php';
        }
    }
    
    public function tutor($tutor_id) 
    {
        if(isset($_SESSION['loggedInStudent_id'])) {
            
            if(isset($tutor_id)) {
            
                $tutor = $this->model->getTutorPage($tutor_id);

                require APP . 'view/_templates/header.php';
                require APP . 'view/booking/index.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            
            require APP . 'view/_templates/header.php';
            require APP . 'view/login/index.php';
            require APP . 'view/_templates/footer.php';
        }
    }
    
    public function newBooking($tutor_id) 
    {
        $student_id = $_SESSION['loggedInStudent_id'];
        $created_at = date("Y-m-d H:i:s");
        $status = "ACTIVE";
        
        $this->model->createBooking($tutor_id, $student_id, $_POST["class"], $_POST["date"], $_POST["time"], $_POST["length"], $_POST["total"], $status, $created_at);
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/booking/confirm.php';
        require APP . 'view/_templates/footer.php';
    }
}