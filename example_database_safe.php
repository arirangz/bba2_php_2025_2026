<?php
$db_name = 'keyce_2025_blog';
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


$article_id = $_GET["id"];
$query = $pdo->prepare("SELECT * FROM post WHERE id = :id");
$query->bindValue(':id', $article_id, PDO::PARAM_INT);
$query->execute();
$article = $query->fetch(PDO::FETCH_ASSOC);

echo "<h2>".$article['title']."</h2>";
echo "<p>".$article['description']."</p>";
?>
