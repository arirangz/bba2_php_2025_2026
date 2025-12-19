<?php

function getAllMovies($pdo):array
{
    $query = $pdo->prepare("SELECT * FROM movie");
    $query->execute();
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);
    return $movies;
}