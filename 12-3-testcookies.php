<?php
    // $defaultName = 'USER';
    setcookie('name', 'USER', time()+5000, '/');
    // echo $_COOKIE['name'] . "<br>";

    if(isset($_COOKIE['name'])){
        // $myName = $_COOKIE['name'];
        echo "OK";
    }else{
        echo "Not OK";
        // $myName = $defaultName;
    }
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // $myName=$_POST['uname'];
        setcookie('name', $_POST['uname'], time()+5000, '/');
        echo $_COOKIE['name'] . "<br>";
    }


    // echo $myName . "<br>";
    // echo $_COOKIE['name'] . "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "<?PHP $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="uname">
        <input type="submit" name="ok" value="send">
    </form>
</body>
</html>