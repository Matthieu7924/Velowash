<?php
require("connect.php");

$req=$bdd->prepare("SELECT * FROM images where id =? limit 1");
$req->execute(array($_GET["id"]));
$tab=$req->fetchAll();
echo $tab[0]["bin"];