<?php

session_start();

class Logout extends Controller 
{
    public function index() 
    {    
        require APP . 'view/_templates/header.php';
        require APP . 'view/logout/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function destroySession() 
    {
        // deletes the current session
        session_unset();
        session_destroy();
        header('location: ' . URL . 'logout');
    }
}