<?php
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
    //Login button
    if (isset($_POST['loginButton'])) {
        echo "Sucessfully logged in";
    }
    //Register button
    if (isset($_POST['registerButton'])) {
        $username = sanitizeFormUsername($_POST['registerUser']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $registerPassword = sanitizeFormPassword($_POST['registerPassword']);
        $registerPassword2 = sanitizeFormPassword($_POST['registerPassword2']);
        $email = sanitizeFormString($_POST['email']);
        $email2 = sanitizeFormString($_POST['email2']);
    }
    
?>
<html> 
<head>
<title>Shotfy</title>
</head>
<body>
    <div id="inputContainer"> 
        <form id="loginForm" action="registro.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUser">Username</label>
                <input id="loginUser" name ="loginUser" type="text" placeholder="Username" required></input>
            </p>
            <p>
                <label for="passwordUser">Password</label>
                <input id="passwordUser" name ="passwordUser" type="password" placeholder="Your password" required></input>
            </p>
            <p>
                <button type="submit" name ="loginButton">LOG IN</button> 
            </p>
        </form>

        <form id="registerForm" action="registro.php" method="POST">
            <h2>Register your account</h2>
            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name ="firstName" type ="text" placeholder="e. g. John" required></input>
            </p>

            <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name ="lastName" type ="text" placeholder="e. g. Smith" required></input>
            </p>

            <p>
                <label for="registerUser">Username</label>
                <input id="registerUser" name ="registerUser" type ="text" placeholder="e. g. John Smith" required></input>
            </p>
            <p>
                <label for="registerPassword">Password</label>
                <input id="registerPassword" name ="registerPassword" type="password" placeholder="Enter your password" required></input>
            </p>

            <p>
                <label for = "registerPassword2">Confirm Password</label>
                <input id="registerPassword2" name ="registerPassword2" type="password" placeholder="Confirm your password" required></input>
            </p>

            <p>
                <label for="email">Email</label>
                <input id="email" name ="email" type ="email" placeholder="e. g. johnsmith@gmail.com" required></input>
            </p>

            <p>
                <label for="email2">Confirm Email</label>
                <input id="email2" name ="email2" type="email" placeholder="e. g. johnsmith@gmail.com" required></input>
            </p>

            <p>
                <button type="submit" name ="registerButton">SIGN IN</button> 
            </p>
        </form>
            
    </div></body>
</html>  