<?php

class Model
{
    public $dao = null;

    /**
     * @param object $db A PDO database connection
     */
    function __construct()
    {
        require APP . 'dao/dao.php';
        $this->dao = new Dao();
    }
    
    
    /******************************
    ** STUDENT SETTERS & GETTERS **
    ******************************/
    public function loginStudent($email, $password)
    {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
        ];
        return $this->dao->get($parameters, "student");
    }

    /****************************
    ** TUTOR SETTERS & GETTERS **
    ****************************/
    public function loginTutor($email, $password)
    {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
        ];
        return $this->dao->get($parameters, "tutor");
    }
}
