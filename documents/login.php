<?php
require('connection.php');
$email=$_GET["ema"];
$password=$_GET["pass"];

$query="INSERT INTO user_sign_in(email,password) VALUES

('$email',$password)";
// echo $query;
mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/login_signup.css">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
</head>

<body>
    <form class="form-signin"  method="GET">
<h1>

           Please login or 
         <a href="signup.php">signup</a></h1>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email address" minlength="5" maxlength="255" autofocus
                name="ema">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" maxlength="255" name="pass">
        </div>
        <div class="form-group">
            <input type="checkbox" id="remember-me" name="checkbox">
            <label for="remember-me">Remember me</label>
        </div>
        <button class="btn">Sign in</button>
        <p class="muted">Copyright &#169 2022</p>
    </form>




</body>

</html>