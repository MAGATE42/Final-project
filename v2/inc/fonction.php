<?php 
function getCategories($connexion) {
    $sql = "SELECT * FROM categorie_objet";
    $resultat = mysqli_query($connexion, $sql);
    $categories = array();

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $categories[] = $ligne;
    }

    return $categories;
}
function getObjets($connexion, $categorie_id = null) {
    if ($categorie_id != null) {
        $sql = "SELECT o.*, e.date_retour FROM objet o 
                LEFT JOIN emprunt e ON o.id_objet = e.id_objet AND e.date_retour > NOW()
                WHERE o.id_categorie = $categorie_id";
    } else {
        $sql = "SELECT o.*, e.date_retour FROM objet o 
                LEFT JOIN emprunt e ON o.id_objet = e.id_objet AND e.date_retour > NOW()";
    }

    $resultat = mysqli_query($connexion, $sql);
    $objets = array();

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $objets[] = $ligne;
    }

    return $objets;
}
function verifierUtilisateur($connexion, $email, $mdp) {
    $sql = "SELECT * FROM membre WHERE email = '$email' AND mdp = '$mdp'";
    $resultat = mysqli_query($connexion, $sql);

    if ($ligne = mysqli_fetch_assoc($resultat)) {
        return $ligne;
    } else {
        return null;
    }
}

function ajouterMembre($connexion, $nom, $naissance, $genre, $email, $ville, $mdp, $image) {
    $sql = "INSERT INTO membre(nom, date_naissance, genre, email, ville, mdp, image_profil) 
            VALUES ('$nom', '$naissance', '$genre', '$email', '$ville', '$mdp', '$image')";
    mysqli_query($connexion, $sql);
}

function getImageObjet($connexion, $id_objet) {
    $sql = "SELECT nom_image FROM images_objet WHERE id_objet = $id_objet LIMIT 1";
    $resultat = mysqli_query($connexion, $sql);

    if ($ligne = mysqli_fetch_assoc($resultat)) {
        return $ligne["nom_image"];
    }
}
function getImagesObjet($connexion, $id_objet) {
    $sql = "SELECT * FROM images_objet WHERE id_objet = $id_objet";
    $resultat = mysqli_query($connexion, $sql);
    $images = array();

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $images[] = $ligne;
    }

    return $images;
}

function supprimerImageObjet($connexion, $id_image) {
    $sql = "DELETE FROM images_objet WHERE id_image = $id_image";
    mysqli_query($connexion, $sql);
}

function getFicheObjet($connexion, $id_objet) {
    $sql = "SELECT o.*, c.nom_categorie, m.nom AS nom_membre FROM objet o
            JOIN categorie_objet c ON o.id_categorie = c.id_categorie
            JOIN membre m ON o.id_membre = m.id_membre
            WHERE o.id_objet = $id_objet";
    $resultat = mysqli_query($connexion, $sql);
    return mysqli_fetch_assoc($resultat);
}

function getHistoriqueEmprunts($connexion, $id_objet) {
    $sql = "SELECT e.*, m.nom FROM emprunt e
            JOIN membre m ON e.id_membre = m.id_membre
            WHERE id_objet = $id_objet
            ORDER BY date_emprunt DESC";
    $resultat = mysqli_query($connexion, $sql);
    $historique = array();

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $historique[] = $ligne;
    }

    return $historique;
}
?>