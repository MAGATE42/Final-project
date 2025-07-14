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