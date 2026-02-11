<?php

require_once "Book.php";
require_once "Manga.php";

$book1984 = new Book("1984", 10, 0.2);

echo "Title: ".$book1984->getTitle()."<br>";
echo "Price tax excl. ".$book1984->getPrice()."$<br>";
echo "Price tax incl. ".$book1984->getPriceWithVAT()."$"."<br>";

echo "-------------<br>";

$mangaAttackOnTitan = new Manga("Attack on titan", 8, 0.2, "Seinen");
echo "Title: ".$mangaAttackOnTitan->getTitle()."<br>";
echo "Price tax excl. ".$mangaAttackOnTitan->getPrice()."$<br>";
echo "Price tax incl. ".$mangaAttackOnTitan->getPriceWithVAT()."$"."<br>";
echo "Manga type: ".$mangaAttackOnTitan->getMangaType()."<br>";