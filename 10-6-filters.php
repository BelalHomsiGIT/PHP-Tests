<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//remove all HTML tags from a string, SANITIZE
    $str = "<h1>Hello World!</h1>";
    echo $str;
    echo "<h3>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr . "<br><br>";

//Validate an Integer & IP Address
    $int = '100';
    $ip = "127.0.0.1";
    echo filter_var($int, FILTER_VALIDATE_INT) . "<br>";
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("$int Integer is valid");
    } else {
        echo("$int Integer is not valid");
    }
    echo"<br><br>";

//Validate an IP Address
    echo filter_var($ip, FILTER_VALIDATE_IP) . "<br>";    
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    }
    echo"<br><br>";

//Sanitize and Validate an Email
    $email = "john.doe@example.com";
// Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
    } else {
    echo("$email is not a valid email address");
    }
    echo"<br><br>";

//Validate an Integer Within a Range
    $x = 122;
    $y=300;
    $min = 1;
    $max = 200;
    if (filter_var($x, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range $x not between $min and $max");
    } else {
        echo("Variable value is within the legal range: $x between $min and $max");
    }
    echo"<br>";
    if (filter_var($y, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range: $y not between $min and $max");
    } else {
        echo("Variable value is within the legal range: $y between $min and $max");
    }
    echo"<br><br>";
    
//Validate URL - Must Contain QueryString or Not
    $url1 = "https://www.w3schools.com";
    if (!filter_var($url1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url1 is a valid URL with a query string");
    } else {
        echo("$url1 is not a valid URL with a query string");
    }
    echo "<br>";
    $url2 = "https://www.w3schools.com?name=belal&age=50";
    if (!filter_var($url2, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url2 is a valid URL with a query string");
    } else {
        echo("$url2 is not a valid URL with a query string");
    }
    
    echo "</h3>";
?>
</body>
</html>