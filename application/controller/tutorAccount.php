<?php
if(!isset($_SESSION)) {
    session_start();
}

class TutorAccount extends Controller
{
    public function account()
    {
        $tutor_id =  $_SESSION['loggedInTutor_id'];

        if (isset($_SESSION['loggedInTutor_id'])) {

            $tutor = $this->model->getTutorInfo($tutor_id);
            $tutorbookings = $this->model->getTutorBookings($tutor_id);
        }
            require APP . 'view/_templates/header.php';
            require APP . 'view/tutor/account.php';
            require APP . 'view/_templates/footer.php';
    }
}