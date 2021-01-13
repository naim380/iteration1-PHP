<?php
require_once "Fonction.php";
require_once "Classe/Catalogue.php";

$catalogue = new Catalogue();
var_dump($catalogue);
displayListeArticle($catalogue);