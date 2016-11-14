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
        
    }
    
    
    /*******************
    ** GET OPERATIONS **
    *******************/
    public function get($parameters, $target)
    {
        if ($target == "student") {
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
    }
    
    
    /**********************
    ** UPDATE OPERATIONS **
    **********************/
    public function update($parameters, $target)
    {
        
    }
    
    
    /**********************
    ** DELETE OPERATIONS **
    **********************/
    public function delete ($parameters, $target)
    {
        
    }
}