<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kekxy's website</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <style>
        h1{
            color: aqua;
            text-align: center;

        }
        h2{
            color:blue;
            text-align: center;
        }
       #form{
           background-color: aqua;
       }
       .class{
           color:deeppink;
           text-align: center;
       }

    </style>
</head>
<h2>Welcome to</h2>
<h1>Lucky numbers</h1>
<hr>

<body>
   <div id="form"> <form action="site.php" method="GET">
    <h3 >What's your name:</h> <input type="text" name="name"> </br></br>

      <h3>How old are you:: </h3> <input type="number" name="age"> </br></br> 
      <h3>What's your zodiac sign:  </h3><input type="text" name="occupation"> </br></br>
       <h3>Where were you born:</h3> <input type="text" name="leasure"></br></br>
        <input type="submit" value='find luckynumber'>

    </form> </div>

    <div class="class"></div>


<?php
$age=$_GET['age'];
$name=$_GET['name'];
$occupation=$_GET['occupation'];
$leasure=$_GET['leasure'];
switch($age){
case 10:
    $age+=7;
    echo  'hello '.$name.' your luckynumber is '.$age.' !'; break;
 case 26:  
    $age+=5;
      echo  'hello '.$name.' your luckynumber is '.$age.' !'; break;
   
  case  21: 
      $age+=9;

    echo  'hello '.$name.' your luckynumber is '.$age.' !';break;

    case  30: 
 
    $age-=4;

    echo  'hello '.$name.' your luckynumber is '.$age.' !';break;
    case  44: 

    $age+=4;

    echo  'hello '.$name.' your luckynumber is '.$age.' !'; break;
    case  27: 

    $age*=7;

    echo  'hello '.$name.' your luckynumber is '.$age.' !';break;
    case  20: 

    $age*=3;

    echo  'hello '.$name.' your luckynumber is '.$age.' !'; break;
    case  16: 

    $age+=14;

    echo  'hello '.$name.' your luckynumber is '.$age.' !';break;
 }

    
    
    ?>
</body>

</html>