<?php

include "../inc/connexion.php";
include "../inc/fonction.php";
session_start();

if (!isset($_SESSION["utilisateur"])) {
    echo "Vous devez être connecté.";
    exit();
}

if (!isset($_GET["id"])) {
    echo "Objet non spécifié.";
    exit();
}

$id_objet = intval($_GET["id"]);

$sql = "SELECT * FROM objet WHERE id_objet = $id_objet AND id_membre = " . $_SESSION["utilisateur"]["id_membre"];
$resultat = mysqli_query($connexion, $sql);

if (mysqli_num_rows($resultat) == 0) {
    echo "Vous n’avez pas le droit de supprimer cet objet.";
    exit();
}

$images = getImagesObjet($connexion, $id_objet);
foreach ($images as $img) {
    $chemin = "../assets/img/" . $img["nom_image"];
    
}
mysqli_query($connexion, "DELETE FROM images_objet WHERE id_objet = $id_objet");
mysqli_query($connexion, "DELETE FROM emprunt WHERE id_objet = $id_objet");
mysqli_query($connexion, "DELETE FROM objet WHERE id_objet = $id_objet");

header("Location: ../model.php?p=profil");
exit();

?>
