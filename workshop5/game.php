<?php
declare(strict_types=1);

require_once "templates/header.php";
require_once "libs/Game.php";



if (isset($_GET["index"])) {
    $index = (int)$_GET["index"];
    $game = getGameByIndex($index);
}
?>

<?php if (isset($game) && $game): ?>
    <h1><?= $game["title"] ?></h1>
    <h2>Editor: <?= $game["editor"] ?> / Year: <?= $game["year"] ?></h2>
    <p><?= $game["description"] ?></p>
<?php else: ?>
    <h1>Game not found</h1>
<?php endif; ?>

<?php require_once "templates/footer.php" ?>