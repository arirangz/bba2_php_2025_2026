<?php
require_once "header.php";
require_once "libs/Article.php";


if (isset($_GET["id"])) { 
    $article = getArticleById($_GET["id"], $articles);
    ?>

    <h1><?= htmlentities($article["title"])   ?></h1>
    <p><?= htmlentities($article["content"])   ?></p>

<?php } else {
    echo "article not found";
}

?>



<?php require_once "footer.php" ?>