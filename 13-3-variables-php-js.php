<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX-catch PHP variable in JS</title>
</head>
<body>
    <h1>Catch PHP variable in Javascript by AJAX</h1>
    <h2 id="hello">Test</h2>
    <button onclick="getPHPVar()">Click</button>
    
<script>
    let myGlobalVar = '';
    fetch('13-3-data.php')
        .then(function(resp){
            return resp.json();
        })
        .then(function(lastData){
            alert("Hello " + lastData);
            myGlobalVar = lastData;
        })

    function getPHPVar(){
        document.getElementById("hello").innerText = myGlobalVar;
    }
</script>
</body>
</html>