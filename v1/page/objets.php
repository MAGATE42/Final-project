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
<div class="container mt-4">
    <h4>Liste des objets</h4>

    <form method="get" action="model.php">
    <input type="hidden" name="p" value="objets">
    
    <div class="row">
        <div class="col-md-6">
     <select name="categorie" class="form-control">
                <option value="">-- Toutes les catégories --</option>
                <?php
          foreach ($categories as $cat) {
                $selected = "";

              if ($categorie_id == $cat["id_categorie"]) {
                        $selected = "selected";
                    }
            ?>
                <option value="<?= $cat["id_categorie"] ?>" <?= $selected ?>>
                        <?= $cat["nom_categorie"] ?>
                </option>
            <?php
                }
                ?>
    </select>
        </div>
        <div class="col-md-2">
            <input type="submit" value="Filtrer" class="btn btn-primary">
        </div>
    </div>
    </form>