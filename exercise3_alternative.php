<?php
$username="John123";
$age = 15;

$message = "";
if ($age < 18) {
    $message = "This game is not suitable for you";
} else {
    $message = "Welcome $username on our game";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Game</h1>
    <h2><?= $message ?></h2>
</body>
</html>