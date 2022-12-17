<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['counter'])){
        $_SESSION['counter']++;
    }else{
        $_SESSION['counter']=1;
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
    <h3>We are in <i> 10-9-byMe-session1.php </i> </h3>
    <h4 style="color: green;">You have visited this page: <?php echo $_SESSION['counter']; ?> time(s)</h4>
    click <a href="10-9-byMe-session2.php">here</a> to visit 10-9-byMe-session2.php page.
</body>
</html>