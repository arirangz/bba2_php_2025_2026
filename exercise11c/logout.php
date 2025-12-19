<?php
session_start();
//Will remove data from $_SESSION
session_unset();
//Will remove the file
session_destroy();

header("Location: login.php");