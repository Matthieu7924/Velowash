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

if (
    isset($_POST['categoriesupp'])
    and !empty($_POST['categoriesupp'])
) {
    $categoriesupp = htmlentities($_POST['categoriesupp']);
    $query = $bdd->prepare('DELETE FROM categories WHERE name =:name');
    $CatDelete = $query->execute([
        ':name' => htmlentities($_POST['categoriesupp'])
    ]);
}

$allcateg = $bdd->query('SELECT * FROM categories ORDER BY name ASC');




require_once realpath("SRC/views/addCategorie.php");
