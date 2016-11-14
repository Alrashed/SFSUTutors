<?php
if(!isset($_SESSION)) {
    session_start();
}

class StudentAccount extends Controller
{
    public function account()
    {
        $student_id =  $_SESSION['loggedInStudent_id'];

        if (isset($_SESSION['loggedInStudent_id'])) {

            $student = $this->model->getStudentInfo($student_id);
            $studentbookings = $this->model->getStudentBookings($student_id);
        }
            require APP . 'view/_templates/header.php';
            require APP . 'view/student/account.php';
            require APP . 'view/_templates/footer.php';
    }
    
    public function deleteBooking($booking_id)
    {
        if (isset($booking_id)) {
            
            $this->model->deleteBooking($booking_id);
        }
        
            header('location: ' . URL . 'student/account');
    }
}
