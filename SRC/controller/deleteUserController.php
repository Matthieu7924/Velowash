<?php

Use \Authentification\Users;
Use \Authentification\UsersManager;

$User= $usersManager->getUser((int) $_GET['id']);

if (isset($_POST['name'])) {
$UserDelete=$usersManager->deleteUser($User);
}


require realpath("SRC/views/deleteUser.php");

