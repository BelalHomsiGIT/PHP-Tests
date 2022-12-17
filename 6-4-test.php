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
    // switch with comparison in case
    $x = 3;
    switch ($x) {
    case ( $x > 5 ):
        echo "Your value is larg !" . "<br>";
        break;
    case "4":
        echo "Your value is 4" . "<br>";
        break;
    case ( $x >=1 && $x <5 ):
        echo "Your value is accepted." . "<br>";
        break;
    default:
        echo "?" . "<br>";
    }
    //output: Your value is accepted.

    //Constants is Global
    define("GREETING1", "Welcome to W3Schools.com");
    function myTest1() {        
        echo GREETING1 . "<br>";
    }
    myTest1(); // Welcome to W3Schools.com
    echo GREETING1 . "<br>"; // Welcome to W3Schools.com

    function myTest2() {
        define("GREETING2", "Welcome to php.net");
        echo GREETING2 . "<br>";
    }
    myTest2(); // Welcome to php.net
    echo GREETING2 . "<br>"; // Welcome to php.net

    //foreach
    echo "(1)<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }
    // output:
    /*
    Peter = 35
    Ben = 37
    Joe = 43
*/
    echo "(2)<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
    foreach($age as $x) {
        echo "$x <br>";
    }
        // output:
    /*
    35
    37
    43
*/
    echo "(3)<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
    foreach($age as $x => $val) {
        echo "$x  ";
    }
    // output : Peter Ben Joe
    echo "<br>";
    echo "(4)<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
    foreach($age as $x => $val) {
        echo "$val  ";
    }
    // output : 35 37 43
?>
</body>
</html>