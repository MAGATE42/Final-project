<?php
include "inc/connexion.php";
include "inc/fonction.php";
session_start();

if (!empty($_POST)) {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $utilisateur = verifierUtilisateur($connexion, $email, $mdp);

    if ($utilisateur != null) {
        $_SESSION["utilisateur"] = $utilisateur;
        echo "<div class='alert alert-success'>Connexion réussie.</div>";
    } else {
        echo "<div class='alert alert-danger'>Email ou mot de passe incorrect.</div>";
    }
}
?>
<div class="container mt-5">
    <h3>Connexion</h3>
    <form method="post">
        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Mot de passe</label>
            <input type="password" name="mdp" class="form-control" required>
        </div>
        <input type="submit" value="Se connecter" class="btn btn-success">
    </form>
</div>