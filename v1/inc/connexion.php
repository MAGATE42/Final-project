<?php
$hote = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "base_emprunt";

$connexion = mysqli_connect($hote, $utilisateur, $motdepasse, $base);

if (!$connexion) {
    echo "Erreur de connexion à la base de données.";
    exit();
}
?>
