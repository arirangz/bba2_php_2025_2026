<?php
require_once "header.php";
require_once "libs/Article.php";


?>

<h1>News</h1>

<section>
    <?php foreach ($articles as $index=>$article): ?>
        <article>
            <h2><?=$article["title"]  ?></h2>
            <a href="article.php?id=<?=$index  ?>">Read more</a>
        </article>
    <?php endforeach; ?>
</section>
<?php require_once "footer.php" ?>