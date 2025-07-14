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

$id_membre = $_SESSION["utilisateur"]["id_membre"];


$sql = "SELECT * FROM emprunt WHERE id_objet = $id_objet AND id_membre = $id_membre AND date_retour > NOW()";
$res = mysqli_query($connexion, $sql);
if (mysqli_num_rows($res) == 0) {
    echo "Aucun emprunt actif trouvé pour cet objet.";
    exit();
}

$sql2 = "UPDATE emprunt SET date_retour = NOW() WHERE id_objet = $id_objet AND id_membre = $id_membre AND date_retour > NOW()";
mysqli_query($connexion, $sql2);

header("Location: model.php?p=fiche_objet&id=$id_objet");
exit();
?>
