<?php

    class User 
    {
        private $con;
        function __construct(){
            include_once("../database/db.php");
            $db = new Database();
            $this->con =  $db->connect();  
       }
       
       //check if the email already used
       private function emailExist($email){
            $prep_st = $this->con->prepare("SELECT id from USER WHERE email = ? ");
            $prep_st->bind_param("s",$email);
            $prep_st->execute() or die($this->con->error);
            $result = $prep_st->get_result();
            if($result->num_rows > 0){
                return 1;
            }
            else{
                return 0;
            }
       }

       //create new user
       public function createUserAccount($username, $email, $password, $usertype){
            if($this->emailExist($email)){
                echo "EMAIL_ALREADY_EXIST";
            }
            else{
                $register_date = date("y-m-d");
                $pass_hash = password_hash($password, PASSWORD_BCRYPT, ["cost"=>8]);
                $notes = "";

                $prep_st = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `usertype`, `register_date`, `notes`) 
                VALUES (?,?,?,?,?,?)");
                $prep_st->bind_param("ssssss", $username, $email, $pass_hash, $usertype, $register_date, $notes);
                $result = $prep_st->execute() or die($this->con->error);
                if($result){
                    return $this->con->insert_id;
                }
                else{
                    return "INSERT_ERROR";
                }
            }  
       }


       // function to let user login
       public function userLogin($email, $password){
           $prep_st = $this->con->prepare("SELECT id, username, password,last_login FROM user WHERE email = ?");
           $prep_st->bind_param("s", $email);
           $prep_st->execute() or die($this->con->error);
           $result = $prep_st->get_result();

           if ($result->num_rows < 1)
           {
               return "NOT_REGISTERED";
           }
           else{
               $row = $result -> fetch_assoc();

               if (password_verify($password,$row["password"])){
                   $_SESSION["userid"] = $row["id"];
                   $_SESSION["username"] = $row["username"];
                   $_SESSION["last_login"] = $row["last_login"];

                   //update user last login time
                   $last_login = date("y-m-d h:m:s");
                   echo $last_login;
                   $prep_st = $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ?");
                   $prep_st->bind_param("ss",$last_login,$email);
                   $result = $prep_st->execute() or die($this->con->error);

                   if($result){
                        return 1;
                   }
                   else{
                        return 0;
                   }
               }
               else{
                   return "PASSWORD_NOT_MATCHED";
               }
           }
       }
    }

    $user = new User();
    //echo $user->createUserAccount("Ibrahim Salih", "Isalih@gmail.com", "722", "Admin");
    echo $user->userLogin("Isalih@gmail.com","722");
    echo $_SESSION["username"];
    

?>