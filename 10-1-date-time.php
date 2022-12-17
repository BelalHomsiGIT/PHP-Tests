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
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";// the day of the week
    echo "Today is " . date("l") . " - The time is " . date("h:i:sa") . "<br>";
    echo '&copy; 2010-' . date("Y");
    $name="Belal";
    $age=50;
    $work="Programer"
?>
</body>
</html>