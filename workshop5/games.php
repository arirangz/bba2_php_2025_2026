<?php 
require_once "templates/header.php";
require_once "libs/Game.php";

$games = getAllGames();
?>

<section>
    <h1>Games list</h1>
    <?php 
        foreach ($games as $index=>$game) {
            require "templates/game_item.php";
        }
    ?>
</section>

<?php require_once "templates/footer.php" ?>
