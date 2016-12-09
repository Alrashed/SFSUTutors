<?php

class Search extends Controller
{
    public function results()
    {
        $majors = $this->model->getAllMajors();
        $tutors = $this->model->getAllTutors();
//        $_SESSION['classcode'] = "";
//        $_SESSION['major_id'] = "";
	    
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/results.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function advanced() 
    {
        $majors = $this->model->getAllMajors();
//        $tutors = $this->model->getAllTutors();
//        $classcode = $_SESSION['classcode'];
//        $major_id = $_SESSION['major_id'];

        
        if (isset($_GET["submit_sortby"])) {
            $sortby = ($_GET["sortby"]);
            
            //sort by high price
            if ($sortby == "high-to-low") {
                $sorttype = "high-to-low";

                if (($_GET["major_id"]!="") && ($_GET["classcode"]!="")) {
                    $filtertype = "both";
                    $filterinput1 = ($_GET["major_id"]);
                    $filterinput2 = ($_GET["classcode"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1, $filterinput2);
                }
                else if (isset($_GET["major_id"]) && ($_GET["major_id"]!="")) {
                    $filtertype = "major_id";
                    $filterinput1 = ($_GET["major_id"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
                else if (isset($_GET["classcode"]) && ($_GET["classcode"]!="")) {
                    $filtertype = "classcode";
                    $filterinput1 = ($_GET["classcode"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
                else {
                    $filtertype = "";
                    $filterinput1 = "";

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
            }

            //sort by low price
            else if ($sortby == "low-to-high") {
                $sorttype = "low-to-high";

                if (($_GET["major_id"]!="") && ($_GET["classcode"]!="")) {
                    $filtertype = "both";
                    $filterinput1 = ($_GET["major_id"]);
                    $filterinput2 = ($_GET["classcode"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1, $filterinput2);
                }
                else if (isset($_GET["major_id"]) && ($_GET["major_id"]!="")) {
                    $filtertype = "major_id";
                    $filterinput1 = ($_GET["major_id"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
                else if (isset($_GET["classcode"]) && ($_GET["classcode"]!="")) {
                    $filtertype = "classcode";
                    $filterinput1 = ($_GET["classcode"]);

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
                else {
                    $filtertype = "";
                    $filterinput1 = "";

                    $tutors = $this->model->getSortedTutors($sorttype, $filtertype, $filterinput1);
                }
            }
        }
        
        //filter by major
        else if (isset($_GET["submit_major_id"])) {
            
            if (isset($_GET["classcode"])) {
                
                if ($_GET["classcode"]!="") {
                    $filtertype = "both";

                    $tutors = $this->model->getFilteredTutors($filtertype, $_GET["major_id"], $_GET["classcode"]);
                }
            }
            else {
                $filtertype = "major_id";
                $tutors = $this->model->getFilteredTutors($filtertype, $_GET["major_id"]);
            }
        }
        
        //filter by class
        else if (isset($_GET["submit_classcode"])) {
            
            if (isset($_GET["major_id"])) {
                
                if ($_GET["major_id"]!="") {
                    $filtertype = "both";

                    $tutors = $this->model->getFilteredTutors($filtertype, $_GET["major_id"], $_GET["classcode"]);
                }
            }
            else {
                $filtertype = "classcode";
                $tutors = $this->model->getFilteredTutors($filtertype, $_GET["classcode"]);
            }
        }
        
        //reset filters
        else if (isset($_GET["reset_filter"])) {
            $tutors = $this->model->getAllTutors();
        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/results.php';
        require APP . 'view/_templates/footer.php';
    }
}







