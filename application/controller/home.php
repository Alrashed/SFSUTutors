<?php

class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://../home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function privacy() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/privacy.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agreement() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/agreement.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function about() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }
}
