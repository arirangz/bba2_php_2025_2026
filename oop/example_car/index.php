<?php

require_once "Car.php";

$toyota = new Car();
$toyota->brand = "Toyota";
$toyota->maxSpeed = 200;

$peugeot = new Car();
$peugeot->brand = "Peugeot";
$peugeot->maxSpeed = 195;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example instantiation</h1>
    <h2>Car brand: <?=$toyota->brand  ?></h2>
    <h2>Car max speed: <?=$toyota->maxSpeed  ?></h2>

    <h2><?= $peugeot->displayBrand() ?></h2>
</body>
</html>