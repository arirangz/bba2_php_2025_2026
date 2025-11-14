<?php

$firstName = "John";
$lastName = "Doe";
$age = 21;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <h2>My name is <?=$firstName ?> <?=$lastName ?>. I am <?=$age ?> years old.</h2>
    <h2><?php echo "My name is $fistName $lastName. I am $age years old" ?></h2>

    <?php 
        echo "<h2>My name is $fistName $lastName. I am $age years old</h2>"
    ?>

</body>
</html>