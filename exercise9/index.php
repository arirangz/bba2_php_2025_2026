<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET["name"])) {
            echo htmlspecialchars($_GET["name"])." is the best name in the world";
        } else {
            echo "name is missing in the url";
        }
     ?>
</body>
</html>