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
    $mynewfile=fopen('newfile.txt','w') or die ('connt create a file!');
    fwrite($mynewfile,'Helooo');
    fclose($mynewfile);
    //
    $myfile=fopen('newfile.txt','r') or die ('connt open the file!');
    echo fread($myfile,filesize('newfile.txt'));
    fclose($myfile);
    echo "<br>";
    //    
    $myfile=fopen('newfile.txt','a+') or die ('connt open the file!');
    echo fwrite($myfile,'Bye');
    fclose($myfile);
    echo "<br>";
    //
    $myfile2=fopen('newfile.txt','r') or die ('connt open the file!');
    echo fread($myfile2,filesize('newfile.txt'));
    fclose($myfile2);
    ?>
</body>
</html>