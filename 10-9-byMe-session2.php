<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>We are in <i> 10-9-byMe-session2.php </i></h3>
    <h4 style="color: red;">The counter from previous page "10-9-byMe-session1.php": <?php echo $_SESSION['counter']; ?></h4>
    click <a href="10-9-byMe-session1.php">here</a> to visit 10-9-byMe-session1.php page.
</body>
</html>