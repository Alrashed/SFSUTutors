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
    
    public function createStudent($firstname, $lastname, $email, $password, $birthdate, $phone) 
    {
        $parameters = [
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":email" => $email,
            ":password" => $password,
            ":birthdate" => $birthdate,
            ":phone" => $phone,
            
        ];
        $this->dao->create($parameters, "student");
        
    }
    
    public function getStudentInfo($student_id)
    {
        $parameters = [
            ":student_id" => $student_id,
        ];
        return $this->dao->get($parameters, "studentInfo");
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
    
    public function createtutor($firstname, $lastname, $email, $password, $birthdate, $phone, $major, $gpa, $about, $available, $offering/*, $price, $photo, $transcript*/) 
    {
        $parameters = [
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":email" => $email,
            ":password" => $password,
            ":birthdate" => $birthdate,
            ":phone" => $phone,
            ":major" => $major,
            ":gpa" => $gpa,
            ":about" => $about,
            ":available" => $available,
            ":offering" => $offering,
            ":price" => $price,
//            ":photo" => $photo,
//            ":transcript" => $transcript,
            
        ];
        $this->dao->create($parameters, "tutor");
        
    }
    
    public function getTutorInfo($tutor_id)
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
        ];
        return $this->dao->get($parameters, "tutorInfo");
    }
}
