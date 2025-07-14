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
?>