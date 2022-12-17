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
//read all content
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    echo fread($myfile,filesize('10-3-readme.txt'));
    fclose($myfile);
    echo "<br><br>";
    //read specified length, 21 characters
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    echo fread($myfile,21);
    fclose($myfile);
    echo "<br><br>";
    //read single line
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    echo fgets($myfile);
    fclose($myfile);
    echo "<br><br>";
    //read every line with break    
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    echo "<br><br>";
    //read single character
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    echo fgetc($myfile);
    fclose($myfile);
    echo "<br><br>";   
    //read first word, at first space
    $myfile=fopen('10-3-readme.txt','r') or die("file not opend!");
    while(!feof($myfile)){
        $c=fgetc($myfile);
        if (ord($c) != 32) {
            echo $c;
        }else{
            break;
        }
    }
    fclose($myfile);
    echo "<br><br>";
?>
</body>
</html>