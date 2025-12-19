<?php require_once "templates/header.php" ?>
<h1>My website</h1>
<!-- LIST MOVIES -->
<?php
$movies = getAllMovies($pdo);
?>
<section>
    <?php foreach($movies as $movie): ?>
        <article>
            <h2><?= $movie["title"] ?></h2>
            <a href="movie.php?id=<?= $movie["id"] ?>">Read more</a>
        </article>
    <?php endforeach; ?>
</section>


<?php require_once "templates/footer.php" ?>
