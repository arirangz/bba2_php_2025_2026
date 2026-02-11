<?php
require_once "Player.php";

$player = Player::getInstance("Eren25");
echo "Initial health: ".$player->getHealth()."<br>";
$player->decreaseHealth(20);
echo "Current health: ".$player->getHealth()."<br>";

