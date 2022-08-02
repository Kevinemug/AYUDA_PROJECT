<!-- require('tricks.php'); -->
<?php

$trick=$_GET['trick'];
$share=$_GET['add'];

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share trick</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form action="" method="GET" id="form">
        <div class="input-group ">
            <input type="text" class="input" placeholder=" Add trick" name="trick" id="input">
            <input type="submit" class="btn btn--accent" name="add" value="Add trick" />
        </div> <hr>

    </form>
        <div class="display" name="display" id="display">
             
            // if($trick)
            // echo $trick
            ?>
        
</body>
<script>
const form=document.getElementById("form");
form.addEventListener("submit",function(e){
    const input=document.getElementById("input").value;
    e.preventDefault();
    if(!input){
        console.log("nonono");
    }
    else{
     const display=document.createElement("p");
     document.body.appendChild(display);
     display.innerHTM="kjkkkk";
    }
});
</script>
</html>