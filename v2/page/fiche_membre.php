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

    <h4>Objets ajoutés</h4>

<?php if (empty($objetsParCategorie)) { ?>
    <p>Aucun objet enregistré.</p>
<?php } else { ?>
    <?php foreach ($objetsParCategorie as $categorie => $objets) { ?>
        <h5 class="mt-3"><?= $categorie ?></h5>
        <div class="row">
                <?php foreach ($objets as $objet) {
             $image = getImageObjet($connexion, $objet["id_objet"]);
                ?>
                    <div class="col-md-3 mb-3">
                    <div class="card">
                   <a href="model.php?p=fiche_objet&id=<?= $objet["id_objet"] ?>">
                <img src="assets/img/<?= $image ?>" class="card-img-top" style="height:180px; object-fit:cover;">
                        </a>
                <div class="card-body">
                                <h6 class="card-title"><?= $objet["nom_objet"] ?></h6>
                       </div>
                        </div>   
                                 </div>
            <?php } ?>
        </div>
    <?php } ?>
<?php } ?>
</div>
