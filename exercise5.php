<?php

$games = [
    ["name" => "GTA 6", "editor" => "Rockstar", "year" => 2026],
    ["name" => "League Of Legends", "editor" => "Riot", "year" => 2009],
    ["name" => "Hollow Kight: Silksong", "editor" => "Team Cherry", "year" => 2025],
    ["name" => "Hades II", "editor" => "Supergiant Game", "year" => 2025],
    ["name" => "Minecraft", "editor" => "Mojang", "year" => 2011],
    ["name" => "Fornite", "editor" => "Epic Games", "year" => 2017],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php foreach ($games as $game) { ?>
            <li>Name: <?=$game["name"]  ?> - Editor: <?= $game["editor"] ?> - Release year: <?= $game["year"] ?></li>
        <?php } ?>
    </ul>
</body>
</html>