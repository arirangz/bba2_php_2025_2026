<?php
session_start();

if(isset($_POST["username"])) {
    // for security
    session_regenerate_id(true);
    $_SESSION["username"] = $_POST["username"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Example session</h1>
    <?php if (isset($_SESSION["username"])): ?>
        <h2>Welcome <?= $_SESSION["username"] ?></h2>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <h2>Sesion form</h2>
        <form action="" method="post">
            <p>
                <label for="username">Enter your username</label>
                <input type="text" name="username" id="username">
            </p>
            <button>Send</button>
        </form>
    <?php endif; ?>
</body>
</html>