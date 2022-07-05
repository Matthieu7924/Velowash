<?php
require("connect.php");

if (isset($_FILES['image'])) {
    //création d'un nom unique pour chaque image envoyée
    //récupération de la taille en MO
    $size = $_FILES['image']['size'] / (1024 * 1024);
    if ($size > 2) {
        echo "le fichier est trop lourd";
    }
    //récupération de l'extension du fichier envoyé
    $type = explode('/', $_FILES['image']['type']);
    $extension = end($type);
    $filename = uniqid();



    // $mimetype = mime_content_type($_FILES['image']);
    // if(in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))) {
    //     move_uploaded_file($_FILES['image']['tmp_name'], "PUBLIC/assets/$filename.$extension");
    //     echo 'OK';
    // } else {
    //     echo 'Upload a real image, jerk!';
    // }

    move_uploaded_file($_FILES['image']['tmp_name'], "PUBLIC/assets/$filename.$extension");
    echo "image enregistrée";
    //enregistrer le fichier dans la base de données
    $req = $bdd->prepare("INSERT INTO images(name,taille,type,bin,user_id)VALUES(?,?,?,?,?)");
    $req->execute(array($_FILES["image"]["name"], $_FILES["image"]["size"], $_FILES["image"]["type"], "PUBLIC/assets/$filename.$extension", $_SESSION['id']));
    // Redirection vers la page de la gallerie
    header('Location:/?page=fichiers');
    exit();
} else {
    // Récupération de toutes les images de l'utilisateur
    $query = $bdd->prepare("SELECT * FROM images WHERE user_id=?");
    $query->execute(array($_SESSION['id']));
    $pictures = $query->fetchAll();

    // Récupération de toutes les images de tous les utilisateurs
    $query = $bdd->prepare('SELECT * FROM images');
    $query->execute();
    $images = $query->fetchAll();
}

require_once realpath("SRC/views/formFichiers.php");
