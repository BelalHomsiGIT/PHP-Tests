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
    //Array
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
    echo "<br>";
    echo "<br>";

    //Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
            }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . " !";
            }
    }
    $myCar = new Car("Black", "Volvo");
    var_dump($myCar);
    echo "<br>";
    echo "<br>";
    echo $myCar -> color . "<br>";
    echo $myCar -> model . "<br>";
    echo $myCar -> message(); // My car is a Black Volvo !
    echo "<br>";
    $myCar = new Car("Red", "Toyota");
    echo $myCar -> message(); // My car is a Red Toyota !
    echo "<br>";
?>    
</body>
</html>