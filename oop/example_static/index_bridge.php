<?php

require_once "Bridge.php";

$bridge1 = new Bridge(100, 15);
$bridge2 = new Bridge(125, 15);
$bridge3 = new Bridge(135, 15);

echo Bridge::getCount();