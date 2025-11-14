<?php 
$gameName = "GTA 6";
$new = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?= $gameName ?>
        <?php if ($new): ?>
                 <strong>NEW!</strong>
        <?php endif; ?>
        
    </p>
</body>
</html>