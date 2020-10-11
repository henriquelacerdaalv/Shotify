<?php   
        //TODO: find better way to reference files
        require_once("includes/Controllers/loginController.php"); 
        require_once("includes/classes/Account.php"); 

        //Cleans tags and replaces spaces for username
        function sanitizeFormUsername($inputText){
            $inputText = strip_tags($inputText); 
            $inputText = str_replace(" ","",$inputText);
            return $inputText;
        }
        //Cleans tags for password
        function sanitizeFormPassword($inputText){
            $inputText = strip_tags($inputText);
            return $inputText;
        }
        //Cleans tags, replaces spaces, uppercases first letters and lowercases rest of the string 
        function sanitizeFormString($inputText){
            $inputText = $_POST['firstName'];
            $inputText = strip_tags($inputText); 
            $inputText = str_replace(" ","",$inputText);
            $inputText = ucfirst(strtolower($inputText));
            return $inputText;
        }
        //Register button pressed
        if (isset($_POST['registerButton'])) {
            $username = sanitizeFormUsername($_POST['registerUser']);
            $firstName = sanitizeFormString($_POST['firstName']);
            $lastName = sanitizeFormString($_POST['lastName']);
            $password = sanitizeFormPassword($_POST['password']);
            $password2 = sanitizeFormPassword($_POST['password2']);
            $email = sanitizeFormString($_POST['email']);
            $email2 = sanitizeFormString($_POST['email2']);
            
            $account = new Account($username, $firstName, $lastName, $password ,$password2, $email, $email2);

            $success = $account->register($username,$firstName,$lastName,$password,$password,$email,$email2);
            
            if ($success == true)
            {
                header("Location: index.php");
            } 
    }   
?>