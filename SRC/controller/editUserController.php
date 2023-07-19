<?php

Use \Authentification\Users;
Use \Authentification\UsersManager;


$User= $usersManager->getUser((int) $_GET['id']);

if (isset($_POST['name'], $_POST['firstname'], $_POST['phone'], $_POST['email'],$_POST['pseudo'])) {
$User= new Users([
            'name' => htmlentities($_POST['name']),
            'firstname' => htmlentities($_POST['firstname']),
            'phone' => htmlentities($_POST['phone']),
            'email' => htmlentities($_POST['email']),
            'pseudo' => htmlentities($_POST['pseudo']),
            'id' => htmlentities($_GET['id'])
        ]);
$UserEdit=$usersManager->editUser($User);
}

require realpath("SRC/Views/editUser.php");