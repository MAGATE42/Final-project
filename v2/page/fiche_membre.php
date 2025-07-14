<?php
include "inc/connexion.php";
include "inc/fonction.php";
session_start();

if (!isset($_SESSION["utilisateur"])) {
    echo "<div class='container mt-4 alert alert-danger'>Vous devez être connecté pour accéder à cette page.</div>";
    exit();
}

$membre = $_SESSION["utilisateur"];
$id_membre = $membre["id_membre"];
$objetsParCategorie = getObjetsParMembreParCategorie($connexion, $id_membre);
?>

<div class="container mt-4">
    <h3>Fiche du membre</h3>
    <div class="row mb-4">
        <div class="col-md-3">
            <img src="assets/img/<?= $membre["image_profil"] ?>" class="img-thumbnail" style="width:100%; max-width:200px;">
        </div>
        <div class="col-md-9">
            <p><strong>Nom :</strong> <?= $membre["nom"] ?></p>
            <p><strong>Date de naissance :</strong> <?= $membre["date_naissance"] ?></p>
            <p><strong>Genre :</strong> <?= $membre["genre"] ?></p>
            <p><strong>Email :</strong> <?= $membre["email"] ?></p>
            <p><strong>Ville :</strong> <?= $membre["ville"] ?></p>
        </div>
    </div>