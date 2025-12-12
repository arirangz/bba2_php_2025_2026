<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p>
            <label for="age">Enter your age</label>
            <input type="number" name="age" id="age">
        </p>
        <p>
            <label for="username">Enter your username</label>
            <input type="text" name="username" id="username">
        </p>
        <button>Check age</button>
    </form>
    <?php
    if (isset($_POST["age"]) && isset($_POST["username"])) {
        if ($_POST["age"] < 18) {
            echo "You are not allowed to play our game";
        } else {
            echo "Welcome {$_POST["username"]} to our game ";
        }
    }
    ?>

</body>

</html>