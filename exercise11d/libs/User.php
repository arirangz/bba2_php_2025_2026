<?php

function loginUser(string $email, string $password): bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        session_regenerate_id(true);
        $_SESSION["email"] = $email;
        header("Location: login.php");
        return true;
    } else {
        return false;
    }
}

function isUserLoggedIn():bool
{
    if (isset($_SESSION["email"])) {
        return true;
    } else {
        return false;
    }
}

function redirectRestrictedZone()
{
    if (!isUserLoggedIn()) {
        header("Location: login.php");
    }
}