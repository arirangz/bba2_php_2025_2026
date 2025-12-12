<?php
declare(strict_types=1);

function getAllGames():array
{
    $games = [
        ["title" => "Clash Royal", "editor" => "Supercell", "year" => 2018, "description" => "Some description"],
        ["title" => "GTA V", "editor" => "Rockstar", "year" => 2015, "description" => "Some description"],
        ["title" => "Portal 2", "editor" => "Valve", "year" => 2010, "description" => "Some description"],
        ["title" => "Minecraft", "editor" => "Mojan", "year" => 2009, "description" => "Some description"],
    ];
    return $games;
}

function getGameByIndex(int $index):array|bool
{
    $games = getAllGames();
    if (isset($games[$index])) {
        return $games[$index];
    } else {
        return false;
    }

}