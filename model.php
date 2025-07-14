<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Emprunt d'Objets</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="model.php">EmpruntObjets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="model.php?p=objets">Objets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="model.php?p=index">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="model.php?p=login">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
if (isset($_GET['p'])) {
    $page = $_GET['p'];
    include "page/$page.php";
} else {
    include "page/index.php";
}
?>

</body>
</html>