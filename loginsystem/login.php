<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'db_connect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "Select * from users where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: opening.php");
        echo "success";

    } 
    else{
        $showError = true;
    }
}

if($showError){
    echo '<script>alert("invalid credentials")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign-up</title>
    <link rel="stylesheet" href="./log.css">
</head>
<body>
    <h2>
        Manage Your Tasks: Login / Sign-up
    </h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="/loginsystem/signin.php" method="POST"form name="form1" >
                <h1>Create Account</h1>
                <input name="name"  type="text" placeholder="Name" >
				<input name="email" type="email" placeholder="Email" >
                <input name="password" type="password" placeholder="Password">
                <input name="cpassword" type="password" placeholder="Confirm Password">
                <button type="submit" onclick="validate1()">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/loginsystem/login.php" method="POST" name="form2" >
                <h1>Log In</h1>
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password" >
                <button onclick="validate2()" >Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./log.js"></script>
</body> 
</html>