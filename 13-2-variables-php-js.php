<?php
    $phpVar = "Hello 'Everbody from PHP Code !!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="varFromPHP" content="<?= htmlspecialchars($phpVar) ?>">
    <title>meta data for php-js variables</title>
</head>
<body>
    <h2>Catch PHP variable in JS using meta data</h2>
    <p id="demo1"></p>
    <hr>
    
    <h2>Catch PHP variable in JS using data attribute for HTML element</h2>
    <h1 data-varphp="<?=htmlspecialchars($phpVar)?>"></h1>
    <p id="demo2"></p>
    <hr>


    <script>
        let jsVarByMetaData = document.querySelector('meta[name="varFromPHP"]').content;
        document.getElementById("demo1").innerHTML = jsVarByMetaData
        
        let jsVarByDataAttribute = document.querySelector('h1').dataset.varphp;
        document.getElementById("demo2").innerHTML = jsVarByDataAttribute
    </script>
</body>
</html>