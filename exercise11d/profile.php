<?php require_once "templates/header.php";
redirectRestrictedZone();
?>

<h1>My profile</h1>

<p>Email: <?= htmlspecialchars($_SESSION["email"])  ?></p>

<?php require_once "templates/footer.php" ?>
