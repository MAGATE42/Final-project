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
?>