<?php

if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:/?page=login");
}

if (
    isset($_POST['categorie'])
    and !empty($_POST['categorie'])
) {
    $categorie = htmlentities($_POST['categorie']);
    $insertcat = $bdd->prepare('INSERT INTO categories(name)VALUES(?)');
    $insertcat->execute(array($categorie));
}

require_once realpath("SRC/Views/addCategorie.php");
