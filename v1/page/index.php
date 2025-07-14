<?php
include "inc/connexion.php";
include "inc/fonction.php";

if (!empty($_POST)) {
    $nom = $_POST["nom"];
    $naissance = $_POST["date_naissance"];
    $genre = $_POST["genre"];
    $email = $_POST["email"];
    $ville = $_POST["ville"];
    $mdp = $_POST["mdp"];
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmp, "assets/img/$image");

    ajouterMembre($connexion, $nom, $naissance, $genre, $email, $ville, $mdp, $image);
    echo "<div class='alert alert-success'>Inscription réussie.</div>";
}
?>
<div class="container mt-5">
    <h3>Inscription</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-2">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Genre</label>
            <select name="genre" class="form-control">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Ville</label>
            <input type="text" name="ville" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Mot de passe</label>
            <input type="password" name="mdp" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Image de profil</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <input type="submit" value="S'inscrire" class="btn btn-primary">
    </form>
</div>
