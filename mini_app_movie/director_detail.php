<?php

require_once "classes/Database.php";
require_once "classes/director.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $director = Director::findOneById($id);
}

require_once "templates/header.php";
?>

<section>
        <?php if (isset($director) && $director):?>

            <?php /** @var Director $director */ ?>
            <h1><?=htmlspecialchars($director->getFirstName()." ".$director->getLastName()); ?></h1>
        <?php else: ?>
            <h1>Director not foud</h1>
        <?php endif; ?>
</section>
<?php require_once "templates/footer.php";
