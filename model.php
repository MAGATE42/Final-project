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