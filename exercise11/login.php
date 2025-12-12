<?php

function loginUser(string $email, string $password):bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        return true;
    } else {
        return false;
    }
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
    <h1>Login</h1>
    <form action="" method="post">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <button>Login</button>
    </form>
    <?php if (isset($_POST["email"]) && isset($_POST["password"])): ?>
        <?php if ( loginUser($_POST["email"], $_POST["password"]) ): ?>
            <h2>You are allowed</h2>
        <?php else: ?>
            <h2>You are not allowed</h2>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>