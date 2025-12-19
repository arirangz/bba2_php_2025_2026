<?php


require_once "templates/header.php";
$message = "";
if (isset($_POST["email"], $_POST["password"])) {
    if (loginUser($_POST["email"], $_POST["password"])) {
        header("Location: profile");
    } else {
        $message = "Incorrect login or password";
    }
}


?>


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
<?php if ($message): ?>
    <?= $message ?>
<?php endif; ?>


<?php
require_once "templates/footer.php";
?>