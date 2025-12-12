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
            <label for="firstName">Enter your name</label>
            <input type="text" name="firstName" id="firstName">
        </p>
        <button>Send</button>
    </form>
    <?php 
        if (isset($_POST["firstName"])) {
            echo htmlspecialchars($_POST["firstName"]);
        }
    ?>
</body>
</html>