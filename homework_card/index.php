<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter the data for the card</h1>
    <form action="card.php" method="post">
        <p>
            <label for="sender_name">Enter your name</label>
            <input type="text" name="sender_name" id="sender_name" required>
        </p>
        <p>
            <label for="destination_name">Enter the name of your friend</label>
            <input type="text" name="destination_name" id="destination_name" required>
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
        </p>
        <button>Send the card</button>
    </form>
</body>
</html>