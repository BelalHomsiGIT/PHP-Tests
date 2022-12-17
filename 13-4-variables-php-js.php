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
    <h2 id="hello1">Name</h2>
    <h2 id="hello2">Age</h2>
    <button onclick="getPHPVar()">Click</button>
    
<script>
    let myGlobalVar1 = '';
    let myGlobalVar2 = '';
    fetch('13-4-data.php')
        .then(function(resp){
            return resp.json();
        })
        .then(function(lastData){
            alert("Hello " + lastData[0] + "you are " + lastData[1]);
            myGlobalVar1 = lastData[0];
            myGlobalVar2 = lastData[1];
        })

    function getPHPVar(){
        document.getElementById("hello1").innerText = myGlobalVar1;
        document.getElementById("hello2").innerText = myGlobalVar2;
    }
</script>
</body>
</html>