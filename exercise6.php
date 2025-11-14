<?php
$meals = [
    ["name" => "Thali", "price" => 10],
    ["name" => "Palak paneer", "price" => 11],
    ["name" => "Aloo gobi", "price" => 13]
];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Restaurant bill</h1>
    <h2>List of the meals</h2>
    <ul>
        <?php foreach($meals as $meal) {
            $total += $meal["price"];
            ?>
            <li><?=$meal["name"]  ?> - <?= $meal["price"] ?>€ </li>
        <?php } ?>
    </ul>
    <p>Total: <strong><?= $total ?>€</strong></p>
</body>
</html>