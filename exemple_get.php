<?php


if (isset($_GET["firstName"])) {
    echo $_GET["firstName"];

} else {
    echo "first name is missing in url";
}
