<?php
    require_once("includes/classes/Constants.php"); 
    class Account {

        private $errorArray;
        private $con;

            public function __construct($con){
                $this->con = $con;
                $this->errorArray = array(); 
            }
                public function register($un, $fn, $ln, $em1, $em2, $pw1, $pw2){
                    //TODO: references register variables
                    $this->validateUsername($un);
                    $this->validateFirstName($fn);
                    $this->validateLastName($ln);
                    $this->validateEmails($em1, $em2);
                    $this->validatePassword($pw1, $pw2);

                    if(empty($this->errorArray)){
                        //Insert into db
                        return insertUser($un, $fn, $ln, $em1, $pw1);
                    }
                    else
                    {
                        return false; 
                    }
                }

                public function getError ($error){
                    if(!in_array($error, $this->errorArray)){
                        $error="";
                    }
                    return "<span class='errorMessage'>$error</span>"; 
                }

                private function insertUser($un, $fn, $ln, $em1, $pw1){
                    $criptPw = md5($pw1);
                    $profilepic = "/assets/images/profilepics/profile.png";
                    $date = date ("Y-m-d");

                    $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un' '$fn', '$ln','$em1', '$criptPw', '$date', '$profilepic'");
                }

                //Validates username 
                private function validateUsername($un){
                    if(strlen($un) > 15 || strlen($un) < 5){
                        array_push($this->errorArray, Constants::$usernameLength); 
                        return;
                    }
                    //TODO: check if username exists
                }

                private function validateFirstName($fn){
                    if(strlen($fn) > 30 || strlen($fn) < 5){
                        array_push($this->errorArray, Constants::$firstNameLength); 
                        return;
                    }
                }

                private function validateLastName($ln){
                    if(strlen($ln) > 30 || strlen($ln) < 5){
                        array_push($this->errorArray, Constants::$lastNameLength); 
                        return;
                    }
                }

                private function validateEmails($em1, $em2){
                    if ($em1 != $em2){
                        array_push($this->errorArray, Constants::$emailsDoNotMatch); 
                        return;
                    }
                    if (!filter_var($em1, FILTER_VALIDATE_EMAIL)){
                        array_push($this->errorArray, Constants::$emailInvalid); 
                        return;
                    }
                }

                private function validatePassword($pw1, $pw2){
                    if ($pw1 != $pw2){
                        array_push($this->errorArray, Constants::$passwordsDoNotMatch); 
                        return;
                    }
                    if(preg_match("#^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$#", $pw1)){
                        array_push($this->errorArray, Constants::$passwordsNotAlfanum);
                        return;
                    }
                    if(strlen($pw1) > 30 || strlen($pw2) < 5){
                        array_push($this->errorArray, Constants::$passwordsLength); 
                        return;
                }
            }
        }
    ?>