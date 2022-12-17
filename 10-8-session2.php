<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION)){
        echo "<pre>";
         print_r($_SESSION);
        echo "</pre>";
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
    <h3>We are in <i> - Page 2 - </i> </h3>
    click <a href="10-8-session1.php">here</a> To Go Page 1.
</body>
</html>