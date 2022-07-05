<?php


$query = $bdd->prepare("SELECT * FROM messages WHERE user_id=?");
$query->execute(array($_GET['id']));


$allUserMsg= $query->fetchAll();
// var_dump($allUserMsg);
require_once realpath("SRC/views/messagesUser.php");
