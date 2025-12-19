<?php
require_once "templates/header.php";

$id = $_GET["id"];

$movie = getMovieById($pdo, $id);

?>
<h1><?= $movie["title"] ?></h1>
<p><?= $movie["summary"] ?></p>

<?php
require_once "templates/footer.php";
?>