<?php
include "inc/connexion.php";
include "inc/fonction.php";

$categorie_id = null;

if (isset($_GET["categorie"])) {
    $categorie_id = $_GET["categorie"];
}

$categories = getCategories($connexion);
$objets = getObjets($connexion, $categorie_id);
?>