<?php
require('connection.php');
$RegNo=$_REQUEST["RegNo"];
$fname=$_REQUEST["fname"];
$othernames=$_REQUEST["Othernames"];
$email=$_REQUEST["email"];
$dob=$_REQUEST["dob"];
$department=$_REQUEST["department"];
$college=$_REQUEST["college"];
$gender=$_REQUEST["gender"];
$save=$_REQUEST["save"];

$query= "INSERT INTO user_sign_up(regNo,fname,othernames,email,dob,department,campus,gender)VALUES
($RegNo,'$fname','$othernames','$email','$dob','$department','$college','$gender')";
// echo $query;
mysqli_query($con,$query);

?>

<!-- if(isset($save))
{
echo" <h1>you have submitted the form sucessfully </h1>";
}


?> -->




<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
        <link rel="stylesheet" href="../css/login_signup.css">
    </head>
    
    <body>
        <form class="form-signin" method="post">
            <!-- action="https://formspree.io/f/xnqwbvop" -->
            
            <h1>Sign up to Ayuda</h1>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First name" minlength="5" maxlength="255" autofocus
                name="fname">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Other names" minlength="5" maxlength="255" autofocus
                name="Othernames">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" minlength="5" maxlength="255" autofocus
                name="email"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Registration number" minlength="5" maxlength="255"
                autofocus name="RegNo">
            </div>
            <div class="form-group">
                <input type="calendar" class="form-control" placeholder="birth year" minlength="5" maxlength="255" autofocus
                name="dob">
        </div>
        <div>
            <select name="department" id="" class="form-control">
                <optgroup label="departments">
                    <option value="null">Select department...</option>
                    <option value="Computer and Software Engineering">Computer and Software Engineering</option>
                    <option value="Computer science">Computer science</option>
                    <option value="Informatin Technology">Information Technology</option>
                    <option value="Cyber security">Cyber security</option>
                    <option value="Robotics">Robotics</option>
                </optgroup>
            </select>
            <select name="college" id="" class="form-control" style="margin-top:1.5rem ;">

                <optgroup label="colleges">
                    <option value="">Select campus...</option>
                    <option value="huye campus">Huye campus</option>
                    <option value="Nyarugenge Campus">Nyarugenge campus</option>
                </optgroup>
            </select>
        </div>
        <h3>gender</h3>
        <div>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <button type="submit" class="btn" name="save"> signup</button>
            <!-- <a href="../documents/success.html" target="_blank"
    style="color:#fff ;text-decoration: none;font-size: 3rem;">getstarted</a> -->
        </div>

    </form>

</body>
</html>