<?php

class Dao
{
    public $db = null;

    function __construct()
    {
        $this->openDatabaseConnection();
    }
    
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        try {
            $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    /**********************
    ** CREATE OPERATIONS **
    **********************/
    public function create($parameters, $target)
    {
        if ($target == "student") {
            $sql = "INSERT INTO student (firstName, lastName, email, password, birthdate, phone) VALUES (:firstname, :lastname, :email, :password, :birthdate, :phone)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
//        else if ($target == "tutor") {
//            $sql = "INSERT INTO tutor (firstName, lastName, email, password, birthdate, phone, major_id, major, gpa, about, available, offering, price) VALUES (:firstname, :lastname, :email, :password, :birthdate, :phone, :major, :gpa, :about, :available, :offering, :price)";
//            $query = $this->db->prepare($sql);
//            try {
//                if ($query->execute($parameters)) {
//                    return true;
//                } else {
//                    return false;
//                }
//            } catch(PDOException $e) {
//                echo $e->getMessage();
//            }
//        }
        
        else if ($target == "tutor") {
            $firstname = $parameters[":firstname"];
            $lastname = $parameters[":lastname"];
            $email = $parameters[":email"];
            $password = $parameters[":password"];
            $birthdate = $parameters[":birthdate"];
            $phone = $parameters[":phone"];
            $major_id = $parameters[":major_id"];
            $major = $parameters[":major"];
            $gpa = $parameters[":gpa"];
            $about = $parameters[":about"];
            $available = $parameters[":available"];
            $offering = $parameters[":offering"];
            $price =  $parameters[":price"];
            $photo =  $parameters[":photo"];
//            $transcript =  $parameters[":transcript"];

            $sql1 = "INSERT INTO upload (photo) VALUES (:photo)";
            $query = $this->db->prepare($sq1);
            try {
                if ($query->execute()) {
                    $sql = "INSERT INTO tutor (firstName, lastName, email, password, birthdate, phone, major_id, major, gpa, about, available, offering, price) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$birthdate."', '".$phone."', '".$major_id."', '".$major."', '".$gpa."', '".$about."' , '".$available."' , '".$offering."', '".$price."', '".$this->db->lastInsertId()."')";
                    
                    $query1 = $this->db->prepare($sql);
                    try {
                        if ($query1->execute()) {
                            return true;
                        } else {
                            return false;
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "booking") {
            $tutor_id = $parameters[":tutor_id"];
            $student_id = $parameters[":student_id"];
            $class = $parameters[":class"];
            $date = $parameters[":date"];
            $time = $parameters[":time"];
            $length = $parameters[":length"];
            $total = $parameters[":total"];
            $status = $parameters[":status"];
            $created_at = $parameters[":created_at"];
            
            $sql ="INSERT INTO booking (tutor_id, student_id, class, date, time, length, total, status, created_at) VALUES('".$tutor_id."', '".$student_id."', '".$class."', '".$date."', '".$time."', '".$length."', '".$total."', '".$status."', '".$created_at."')";

            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    
    
    /*******************
    ** GET OPERATIONS **
    *******************/
    public function get($parameters, $target)
    {
        if ($target == "allStudents") {
            $sql = "SELECT student_id, firstName, lastName, email, birthdate, phone FROM student";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        else if ($target == "student") {
           $email = $parameters[":email"];
           $password = $parameters[":password"];
           $sql = "SELECT student_id, email FROM student WHERE (email = '".$email."') AND (password = '".$password."')";
           $query = $this->db->prepare($sql);
           try {
               if ($query->execute()) {
                   return $query->fetch();
               } else {
                   return false;
               }
           } catch (PDOException $e) {
               echo $e->getMessage();
           }
        }

        else if ($target == "studentInfo") {
            $student_id = $parameters[":student_id"];
            $sql = "SELECT firstName, lastName, email, birthdate, phone FROM student WHERE student_id = '".$student_id."' ";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "allTutors") {
            $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE u.upload_id = t.upload_id";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        else if ($target == "tutor") {
           $email = $parameters[":email"];
           $password = $parameters[":password"];
           $sql = "SELECT tutor_id, email FROM tutor WHERE (email = '".$email."') AND (password = '".$password."')";
           $query = $this->db->prepare($sql);
           try {
               if ($query->execute()) {
                   return $query->fetch();
               } else {
                   return false;
               }
           } catch (PDOException $e) {
               echo $e->getMessage();
           }
        }

        else if ($target == "tutorInfo") {
            $tutor_id = $parameters[":tutor_id"];
            $sql = "SELECT t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE t.tutor_id = '".$tutor_id."' AND u.upload_id = t.upload_id";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "tutorPage") {
            $tutor_id = $parameters[":tutor_id"];
            $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.major_id, t.major, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE t.tutor_id = '".$tutor_id."' AND u.upload_id = t.upload_id";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    $result = $query->fetch();
                    return $result;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "tutorSchedule") {
            $tutor_id = $parameters[":tutor_id"];
            $sql = "SELECT booking_id, DATE_FORMAT(date,'%m/%d/%Y') as date, TIME_FORMAT(time, '%h:%i %p') as time, length FROM booking WHERE tutor_id = '".$tutor_id."' ";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    $result = $query->fetchAll();
                    return $result;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "majors") {
            $sql = "SELECT * FROM major";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
    }
    
    
    /**********************
    ** UPDATE OPERATIONS **
    **********************/
    public function update($parameters, $target)
    {
        if ($target == "student") {
            $student_id = $parameters[":student_id"];
            $password = $parameters[":password"];
            $phone = $parameters[":phone"];

            $sql = "UPDATE student SET password = '".$password."', phone = '".$phone."' WHERE student_id = '".$student_id."'";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if ($target == "tutor") {
            $tutor_id = $parameters[":tutor_id"];
            $password = $parameters[":password"];
            $phone = $parameters[":phone"];
            $about = $parameters[":about"];
            $available = $parameters[":available"];
            $offering = $parameters[":offering"];
            $price =  $parameters[":price"];
            $photo =  $parameters[":photo"];
            $transcript =  $parameters[":transcript"];

            $sql = "UPDATE tutor SET password = '".$password."', phone = '".$phone."' , about = '".$about."' , available = '".$available."' , offering = '".$offering."', $price = '".$price."' WHERE tutor_id = '".$tutor_id."'";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            $sql = "SELECT upload_id FROM upload WHERE tutor_id = '".$tutor_id."' ";
            $query = $this->db->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            $uploadID = $result->upload_id;

            $sql1 = "UPDATE upload SET photo = :photo, transcript = :transcript WHERE upload_id = '".$uploadID."'";
            $query1 = $this->db->prepare($sql1);
            $parameters1 = array(':photo' => $photo, ':transcript' => $transcript);

            try {
                if ($query1->execute($parameters1)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }
        
        else if ($target == "editStatus") {
            $booking_id =  $parameters[":booking_id"];
            $status =  $parameters[":status"];
            $sql = "UPDATE booking SET status = '".$status."' WHERE booking_id = '".$booking_id."'";
            try {
                if ($sql->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    
    
    /**********************
    ** DELETE OPERATIONS **
    **********************/
    public function delete($parameters, $target)
    {
       if($target == "student") {
            $sql = "DELETE FROM student WHERE (student_id) = (:student_id)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        else if($target == "tutor") {
            $sql = "DELETE FROM tutor WHERE (tutor_id) = (:tutor_id)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        else if($target == "booking") {
            $sql = "DELETE FROM booking WHERE (booking_id) = (:booking_id)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    
    
    /**********************
    ** SEARCH OPERATIONS **
    **********************/
    public function search($parameters, $target) 
    {
        //sort high-to-low
        if ($target == "HighToLowTutors") {
            if (isset($parameters[":filtertype"])) {
                $filtering = $parameters[":filtertype"];
                
                if ($filtering == "both") {
                    $major_id = $parameters[":filterinput1"];
                    $classcode = $parameters[":filterinput2"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."') AND (t.offering LIKE '%.".$classcode."%') ORDER BY cast(t.price as SIGNED) DESC";
                }
                else if ($filtering == "major_id") {
                    $major_id = $parameters[":filterinput1"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."') ORDER BY cast(t.price as SIGNED) DESC";
                }
                else if ($filtering == "classcode") {
                    $classcode = $parameters[":filterinput1"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id) AND (t.offering LIKE '%.".$classcode."%') ORDER BY cast(t.price as SIGNED) DESC";
                }
            }
            else {
                $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE u.upload_id = t.upload_id ORDER BY cast(t.price as SIGNED) DESC";
            }
            
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        //sort low-to-high
        else if ($target == "LowToHighTutors") {
            if (isset($parameters[":filtertype"])) {
                $filtering = $parameters[":filtertype"];
                
                if ($filtering == "both") {
                    $major_id = $parameters[":filterinput1"];
                    $classcode = $parameters[":filterinput2"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."') AND (t.offering LIKE '%.".$classcode."%') ORDER BY cast(t.price as SIGNED) ASC";
                }
                else if ($filtering == "major_id") {
                    $major_id = $parameters[":filterinput1"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."') ORDER BY cast(t.price as SIGNED) ASC";
                }
                else ($filtering == "classcode") {
                    $classcode = $parameters[":filterinput1"];
                    
                    $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id) AND (t.offering LIKE '%.".$classcode."%') ORDER BY cast(t.price as SIGNED) DESC";
                }
            }
            else {
                $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE u.upload_id = t.upload_id ORDER BY cast(t.price as SIGNED) ASC";
            }
            
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        //filter by major and class
        else if ($target == "FilterBothTutors") {
            $major_id = $parameters[":filterinput1"];
            $classcode = $parameters[":filterinput2"];
                    
            $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."') AND (t.offering LIKE '%.".$classcode."%')";
            
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        //filter by major
        else if ($target == "FilterMajorTutors") {
            $major_id = $parameters[":filterinput1"];
                    
            $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id AND t.major_id = '".$major_id."')";
            
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        
        //filter by class
        else if ($target == "FilterClassTutors") {
            $classcode = $parameters[":filterinput1"];
                    
            $sql = "SELECT t.tutor_id, t.firstName, t.lastName, t.email, t.birthdate, t.phone, t.major_id, t.major, t.gpa, t.about, t.available, t.offering, t.price, u.photo FROM tutor t, upload u WHERE (u.upload_id = t.upload_id) AND (t.offering LIKE '%.".$classcode."%')";
            
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
    }
}











