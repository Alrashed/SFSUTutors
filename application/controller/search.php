<?php

class Search extends Controller
{
    public function results()
    {
        $majors = $this->model->getAllMajors();
        $tutors = $this->model->getAllTutors();
	    
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/results.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function advanced() 
    {
        $majors = $this->model->getAllMajors();
        
        //filter by major
        if (isset($_GET["major_id"])) {
            
            $tutors = $this->model->getFilteredTutors($_GET["major_id"], $_GET["classcode"]);
        }
        
        //filter by class
        else if (isset($_GET["submit_classcode"])) {
            
            $tutors = $this->model->getFilteredTutors($_GET["major_id"], $_GET["classcode"]);
        }
        
        //sort
        else if (isset($_GET["sortby"])) {
            
            if ($_GET["sortby"] == "") {
                
                $tutors = $this->model->getFilteredTutors($_GET["major_id"], $_GET["classcode"]);
            }
            else {

                $tutors = $this->model->getSortedTutors($_GET["sortby"], $_GET["major_id"], $_GET["classcode"]);
            }
        }
                
        //reset filters
        else if (isset($_GET["reset_filter"])) {
            $tutors = $this->model->getAllTutors();
        }
        
//        else {
//            $tutors = $this->model->getAllTutors();
//        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/results.php';
        require APP . 'view/_templates/footer.php';
    }
}







