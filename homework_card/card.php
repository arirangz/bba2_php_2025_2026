
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Card</h1>
    <?php if(isset($_POST["sender_name"], $_POST["destination_name"], $_POST["message"])): ?>
        <p>Sent from: <?=htmlspecialchars($_POST["sender_name"])   ?></p>
        <p>To: <?=htmlspecialchars($_POST["destination_name"])   ?></p>
        <p>Message: <?=htmlspecialchars($_POST["message"])   ?></p>
    <?php else: ?>
        <h2>No data has been sent</h2>
    <?php endif;?>
</body>
</html>