<?php

require_once "classes/Database.php";
require_once "classes/Movie.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $movie = Movie::findOneById($id);
}

require_once "templates/header.php";
?>

<section>
        <?php if (isset($movie) && $movie):?>

            <?php /** @var Movie $movie */ ?>
            <h1><?=htmlspecialchars($movie->getTitle()); ?></h1>
            <h2><?=htmlspecialchars($movie->getSummary()); ?></h2>
            <p>Released in: <?=$movie->getReleaseDate()->format("d/m/Y"); ?></p>
            <p>Director: <a href="director_detail.php?id=<?= htmlspecialchars($movie->getDirector()->getId()) ?>"><?= htmlspecialchars($movie->getDirector()->getFirstName()). " ".htmlspecialchars($movie->getDirector()->getLastName()) ?></a> </p>

        <?php else: ?>
            <h1>Movie not foud</h1>
        <?php endif; ?>
</section>
<?php require_once "templates/footer.php";
