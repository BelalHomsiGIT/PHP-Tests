<?php
    $myName = "Belal Homsi";
    $phpVar = "Hello 'Test Quote mark";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Var PHP to Javascript</title>
</head>
<body>
    <h2>Passing Variables from PHP to Javascript</h2>
    <hr>
    
    <h4>This value is PHP variable:</h4>
    <p><?=$myName?></p>
    <h4>This value is Javascript variable:</h4>
    <p id="demo1"></p>
    <hr><hr>
    
    <h3>When variable has special HTML character as single qoute:</h3>
    <hr>
    <h4>This value is PHP variable:</h4>
    <p><?=$phpVar?></p>
    <h4>This value is Javascript variable:</h4>
    <p id="demo2"></p>
    <hr>
    
    <h4>This value is PHP variable:</h4>
    <p><?=$phpVar?></p>
    <h4>This value is Javascript variable - using json_encode:</h4>
    <p id="demo3"></p>
    <hr>
    <h4>Use th hidden input field and htmlspecialchars:</h4>
    <input type="hidden" name="" value="<?= htmlspecialchars($phpVar) ?>">
    <p id="demo4"></p>

    <script>
        let jsVar1 = '<?= $myName ?>'
        console.log(jsVar1)
        document.getElementById("demo1").innerHTML = jsVar1
        
        // we get error: Uncaught SyntaxError: Unexpected identifier 'Test'
        //because the php variable has a single quote:
        /*
        let jsVar2 =  '<?= $phpVar ?>'
        document.getElementById("demo2").innerHTML = jsVar2
        */

        //Solutions:
        //the first solution is to make double qoutes instead of single:
        let jsVar2 =  "<?= $phpVar ?>"
        console.log(jsVar2)
        document.getElementById("demo2").innerHTML = jsVar2;

        //the second solution is to use json_encode, this is better:
        let jsVar3 = <?= json_encode($phpVar); ?>
        // console.log(jsVar3)
        document.getElementById("demo3").innerHTML = jsVar3

        //the third solution is to use the hidden input field:
        document.getElementById("demo4").innerHTML = document.querySelector('input[type="hidden"]').value;

        //the fourth solution is to use the meta in the head ,
        // - as in the next file 13-2-variables-php-js.php
    </script>

</body>
</html>