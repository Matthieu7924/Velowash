<?php
$query = $bdd->prepare("SELECT * FROM messages WHERE pseudo=? ");
$query->execute(array($_SESSION['login']));
$allposts = $query->fetchAll();
    require_once("SRC/Views/posts.php");