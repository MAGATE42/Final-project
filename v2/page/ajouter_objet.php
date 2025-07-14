<?php
include "inc/connexion.php";
include "inc/fonction.php";


if (!isset($_SESSION["utilisateur"])) {
    echo "<div class='alert alert-danger mt-4 container'>Vous devez être connecté pour ajouter un objet.</div>";
    exit();
}

$id_membre = $_SESSION["utilisateur"]["id_membre"];
$categories = getCategories($connexion);

if (!empty($_POST)) {
    $nom_objet = $_POST["nom_objet"];
    $id_categorie = $_POST["categorie"];
    $id_objet = ajouterObjet($connexion, $nom_objet, $id_categorie, $id_membre);

    foreach ($_FILES["images"]["tmp_name"] as $key => $tmp) {
        if (!empty($tmp)) {
            $nom_image = $_FILES["images"]["name"][$key];
            move_uploaded_file($tmp, "assets/img/$nom_image");
            ajouterImageObjet($connexion, $id_objet, $nom_image);
        }
    }

    echo "<div class='alert alert-success container mt-3'>Objet ajouté avec succès !</div>";
}
?>

<div class="container mt-5">
    <h3>Ajouter un nouvel objet</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-2">
            <label>Nom de l'objet</label>
            <input type="text" name="nom_objet" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Catégorie</label>
            <select name="categorie" class="form-control" required>
                <option value="">-- Choisissez une catégorie --</option>
                <?php foreach ($categories as $cat) { ?>
                    <option value="<?= $cat["id_categorie"] ?>"><?= $cat["nom_categorie"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-2">
            <label>Images (plusieurs possibles)</label>
            <input type="file" name="images[]" multiple class="form-control" required>
        </div>
        <input type="submit" value="Ajouter l'objet" class="btn btn-primary">
    </form>
</div>
