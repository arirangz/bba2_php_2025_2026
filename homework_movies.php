<?php
$movies = [
    ["title" => "Matrix", "year" => 1999],
    ["title" => "Openhimer", "year" => 2023],
    ["title" => "Avatar", "year" => 2025],
    ["title" => "Titanic", "year" => 1997],
];
$recentMovieYear = 0;
$recentMovieTitle = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Homework movies</h1>

    <ul>
        <?php foreach($movies as $movie):  ?>
            <?php 
                if ($movie["year"] > $recentMovieYear) {
                    $recentMovieYear = $movie["year"];
                    $recentMovieTitle = $movie["title"];
                }    
            ?>
            <li><?=$movie["title"] ?> - Release: <?=$movie["year"] ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>The most recent movie:</h2>
    <h3><?=$recentMovieTitle ?> - Release: <?= $recentMovieYear ?></h3>
</body>
</html>