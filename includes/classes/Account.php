<?php
    class Account {

        private $errorArray;

            public function __construct(){
                $this->errorArray = array(); 
            }
                public function register($un, $fn, $ln, $em1, $em2, $pw1, $pw2){
                    $this->validateUsername($un);
                    $this->validateFirstName($fn);
                    $this->validateLastName($ln);
                    $this->validateEmails($em1, $em2);
                    $this->validatePassword($pw1, $pw2);

                    if(empty($this->errorArray)){
                        //Insert into db
                        return true;
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

                //Validates username 
                private function validateUsername($un){
                    if(strlen($un) > 15 || strlen($un) < 5){
                        array_push($this->errorArray, "Your username must be between 5 and 15 characters."); 
                        return;
                    }
                    //TODO: check if username exists
                }

                private function validateFirstName($fn){
                    if(strlen($fn) > 30 || strlen($fn) < 5){
                        array_push($this->errorArray, "Your first name must be between 5 and 30 characters."); 
                        return;
                    }
                }

                private function validateLastName($ln){
                    if(strlen($ln) > 30 || strlen($ln) < 5){
                        array_push($this->errorArray, "Your last name must be between 2 and 30 characters."); 
                        return;
                    }
                }

                private function validateEmails($em1, $em2){
                    if ($em1 != $em2){
                        array_push($this->errorArray, "Your emails don't match."); 
                        return;
                    }
                    if (!filter_var($em1, FILTER_VALIDATE_EMAIL)){
                        array_push($this->errorArray, "Your email is invalid"); 
                        return;
                    }
                }

                private function validatePassword($pw1, $pw2){
                    if ($pw1 != $pw2){
                        array_push($this->errorArray, "Your passwords don't match."); 
                        return;
                    }
                }
            }
    ?>