<?php 
    //TODO: find better way to reference files
    // include("includes/Controllers/registerController.php"); 
    // include("includes/Controllers/loginController.php"); 
    // include("includes/classes/Account.php"); 

    // $account = new Account();
    // $account->register();
?>

<html> 
<head>
<title>Shotfy</title>
</head>
<body>
    <div id="inputContainer"> 
        <form id="loginForm" action="register.php" method="POST">
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

        <form id="registerForm" action="register.php" method="POST">
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
                <label for="password">Password</label>
                <input id="password" name ="password" type="password" placeholder="Enter your password" required></input>
            </p>

            <p>
                <label for = "password2">Confirm Password</label>
                <input id="password2" name ="password2" type="password" placeholder="Confirm your password" required></input>
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