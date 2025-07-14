<?php
include "inc/connexion.php";
include "inc/fonction.php";

if (!isset($_GET["id"])) {
    echo "<div class='container mt-4 alert alert-danger'>Objet introuvable.</div>";
    exit();
}

$id_objet = $_GET["id"];
$objet = getFicheObjet($connexion, $id_objet);
$images = getImagesObjet($connexion, $id_objet);
$historique = getHistoriqueEmprunts($connexion, $id_objet);
?>

<div class="container mt-4">
    <h3><?= $objet["nom_objet"] ?> <small class="text-muted">(<?= $objet["nom_categorie"] ?>)</small></h3>
    <p>Ajouté par : <strong><?= $objet["nom_membre"] ?></strong></p>

    <div class="row mb-3">
        <?php foreach ($images as $img) { ?>
            <div class="col-md-3">
                <img src="assets/img/<?= $img["nom_image"] ?>" class="img-fluid rounded border" style="height:200px; object-fit:cover;">
            </div>
        <?php } ?>
    </div>

    <h5>Historique des emprunts</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom de l'emprunteur</th>
                <th>Date d'emprunt</th>
                <th>Date de retour</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historique as $h) { ?>
                <tr>
                    <td><?= $h["nom"] ?></td>
                    <td><?= $h["date_emprunt"] ?></td>
                    <td><?= $h["date_retour"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
            </table>
</div>
