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
    public function getAllStudents()
    {
        return $this->dao->get([], "allStudents");
    }
    
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
    
    public function getStudentBooking($student_id)
    {
        $parameters = [
            ":student_id" => $student_id,
        ];
        return $this->dao->get($parameters, "studentBookings");
    }
    
    public function editStudent($student_id, $password, $birthdate, $phone) 
    {
        $parameters = [
            ":student_id" => $student_id,
            ":password" => $password,
            ":birthdate" => $birthdate,
            ":phone" => $phone,
        ];
        $this->dao->update($parameters, "student");
    }
    
    public function deleteStudent($student_id)
    {
        $parameters = [
            ":student_id" => $student_id,
        ];
        $this->dao->delete($parameters, "student");

    }
    
    
    /****************************
    ** TUTOR SETTERS & GETTERS **
    ****************************/
    public function getAllTutors()
    {
        return $this->dao->get([], "allTutors");
    }
    
    public function loginTutor($email, $password)
    {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
        ];
        return $this->dao->get($parameters, "tutor");
    }

    public function createtutor($firstname, $lastname, $email, $password, $birthdate, $phone, $major_id, $major, $gpa, $about, $available, $offering, $price, $photo/*, $transcript*/) 
    {
        $parameters = [
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":email" => $email,
            ":password" => $password,
            ":birthdate" => $birthdate,
            ":phone" => $phone,
            ":major_id" => $major_id,
            ":major" => $major,
            ":gpa" => $gpa,
            ":about" => $about,
            ":available" => $available,
            ":offering" => $offering,
            ":price" => $price,
            ":photo" => $photo,
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
    
    public function getTutorPage($tutor_id)
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
        ];
        return $this->dao->get($parameters, "tutorPage");
    }
    
    public function getTutorBooking($tutor_id)
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
        ];
        return $this->dao->get($parameters, "tutorBookings");
    }
    
    public function editTutor($tutor_id, $password, $phone, $major_id, $major, $about, $available, $offering, $price, $photo/* ,$transcript*/) 
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
            ":password" => $password,
            ":phone" => $phone,
            ":major_id" => $major_id,
            ":major" => $major,
            ":about" => $about,
            ":available" => $available,
            ":offering" => $offering,
            ":price" => $price,
            ":photo" => $photo,
//            ":transcript" => $transcript,
        ];
        $this->dao->update($parameters, "tutor");
    }
    
    public function deleteTutor($tutor_id)
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
        ];
        $this->dao->delete($parameters, "tutor");

    }
    
    
    /******************************
    ** BOOKING SETTERS & GETTERS **
    ******************************/
    public function createBooking($tutor_id, $student_id, $class, $date, $time, $length, $total, $status, $created_at) 
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
            ":student_id" => $student_id,
            ":class" => $class,
            ":date" => $date,
            ":time" => $time,
            ":length" => $length,
            ":total" => $total,
            ":status" => $status,
            ":created_at" => $created_at,
        ];
        $this->dao->create($parameters, "booking");
    }
    
    public function editStatus($booking_id, $status) 
    {
        $parameters = [
            ":booking_id" => $booking_id,
            ":status" => $status,
        ];
        $this->dao->update($parameters, "editStatus");
    }
    
    public function deleteBooking($booking_id) 
    {
        $parameters = [
            ":booking_id" => $booking_id,
        ];
        $this->dao->delete($parameters, "booking");
    }
    
    public function getBooking($booking_id) 
    {
        $parameters = [
            ":booking_id" => $booking_id,
        ];
        return $this->dao->get($parameters, "booking");
    }
    
    public function getTutorSchedule($tutor_id) 
    {
        $parameters = [
            ":tutor_id" => $tutor_id,
        ];
        return $this->dao->get($parameters, "tutorSchedule");
    }
    
    
    /***************************
    ** SEARCH FILTER AND SORT **
    ***************************/
    public function getAllMajors()
    {
        $parameters = [
        ];
        return $this->dao->get($parameters, "majors");
    }
    
    public function getSortedTutors($sortby, $major_id, $classcode) 
    {
        if ($major_id == "") {
            $parameters = [
                ":classcode" => $classcode,
            ];
            if ($sortby == "price-high-low") {
                return $this->dao->search($parameters, "highToLowTutors");
            }
            else if ($sortby == "price-low-high") {
                return $this->dao->search($parameters, "lowToHighTutors");
            }
        }
        else {
            $parameters = [
                ":classcode" => $classcode,
                ":major_id" => $major_id,
            ];
            if ($sortby == "price-high-low") {
                return $this->dao->search($parameters, "highToLowTutors");
            }
            else if ($sortby == "price-low-high") {
                return $this->dao->search($parameters, "lowToHighTutors");
            }
        }
    }
    
    public function getFilteredTutors($major_id, $classcode) 
    {   
        if ($major_id == "") {
            $parameters = [
                ":classcode" => $classcode,
            ];
            return $this->dao->search($parameters, "filterClassTutors");
        }
        else {
            $parameters = [
                ":classcode" => $classcode,
                ":major_id" => $major_id,
            ];
            return $this->dao->search($parameters, "filterBothTutors");
        }
    }
}
