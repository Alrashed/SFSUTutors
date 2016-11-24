<?php

class Search extends Controller
{
    public function results()
    {
        $tutors = $this->model->getAllTutors();
	    
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/results.php';
        require APP . 'view/_templates/footer.php';
    }
}