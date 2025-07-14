<?php
include "inc/connexion.php";
include "inc/fonction.php";
session_start();

if (!isset($_SESSION["utilisateur"])) {
    echo "Vous devez être connecté.";
    exit();
}

$id_objet = $_GET["id"] ?? null;
if (!$id_objet) {
    echo "Objet invalide.";
    exit();
}

$membre = $_SESSION["utilisateur"];
$id_membre = $membre["id_membre"];

$sql = "SELECT * FROM objet WHERE id_objet = $id_objet AND id_membre = $id_membre";
$res = mysqli_query($connexion, $sql);

if (mysqli_num_rows($res) == 0) {
    echo "Vous n'êtes pas autorisé à supprimer cet objet.";
    exit();
}

$sql_images = "SELECT nom_image FROM images_objet WHERE id_objet = $id_objet";
$res_images = mysqli_query($connexion, $sql_images);
while ($img = mysqli_fetch_assoc($res_images)) {
    $fichier = "assets/img/" . $img["nom_image"];
    if (file_exists($fichier)) {
        unlink($fichier);
    }
}

mysqli_query($connexion, "DELETE FROM images_objet WHERE id_objet = $id_objet");

mysqli_query($connexion, "DELETE FROM emprunt WHERE id_objet = $id_objet");

mysqli_query($connexion, "DELETE FROM objet WHERE id_objet = $id_objet");

header("Location: model.php?p=fiche_membre");
exit();
?>
