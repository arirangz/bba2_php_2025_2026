<?php
$db_name = 'keyce_exercice11_2025';
$db_user = 'root';
$db_password = '';
try
{
$pdo = new PDO('mysql:dbname='.$db_name.';host=localhost;charset=utf8mb4', $db_user, $db_password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}