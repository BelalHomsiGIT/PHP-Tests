<!DOCTYPE html>
<?php
    session_start();

    if(isset($_GET["start"])){
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
    <h3>We are in <i> 10-10-byMe-session2.php </i></h3>
    <h4 style="color: red;">
        The counter from previous page "10-10-byMe-session1.php": 
        <?php echo isset($_SESSION['counter']) ?  $_SESSION['counter'] : "No SESSION - 0"; ?> time(s)
    </h4>

    click <a href="10-10-byMe-session1.php" style="font-size: 20px;"> here</a> to visit 10-10-byMe-session1.php page.
    <br>
    <br>
    <a href='10-10-byMe-session1.php?start=true'><button>ReStart As First Time</button></a>
    <br>
    <br>
    <a href='10-10-byMe-session1.php?prev=true'><button>Test Change SESSION Value and Reset to Original Last Previous One</button></a>
    <br>
    <br>
    <a href='10-10-byMe-session1.php?dest=true'><button>Destroy SESSION</button></a>
    <br>
    <br>

    <h3>References</h3>
    <a href="https://www.w3schools.com/php/php_sessions.asp">from W3SCHOOLE</a> <br>
    <a href="https://www.php.net/manual/en/function.session-reset.php#:~:text=session_reset()%20reinitializes%20a%20session,discards%20changes%20in%20%24_SESSION.">from PHP.NET</a> <br>
    <h3>How run PHP function onclick button </h3>
    <a href="https://stackoverflow.com/questions/19323010/execute-php-function-with-onclick">from stackoverflow.com</a> <br>
</body>
</html>