<?php

require_once "Car.php";

$toyota = new Car("Toyota", 200);
$toyota->setMaxSpeed(-50);

$peugeot = new Car("Peugeot", 195);


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
    <h2>Car brand: <?=$toyota->getBrand();  ?></h2>
    <h2>Car max speed: <?=$toyota->getMaxSpeedWithKm()  ?></h2>

    <h2><?= $peugeot->displayBrand() ?></h2>
</body>
</html>