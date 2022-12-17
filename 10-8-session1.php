<!DOCTYPE html>
<?php
    session_start();
    if(!empty($_SESSION)){
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    }else{
        echo "The SESSION is Empty.<br>";
        $_SESSION['name']="Belal";
        $_SESSION['age']=110;
        $_SESSION['email']="belalocp72@gmail.com";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>We are in <i> - Page 1 - </i> </h3>
    click <a href="10-8-session2.php">here</a> To Go Page 2.
</body>
</html>