<?php

use \Authentification\Users;
use \Authentification\UsersManager;

$Manager = new UsersManager($bdd);



if (isset($_POST["name"])) {

    $User = new Users(
        [
            'name' => $_POST["name"],
            'firstname' => $_POST["firstname"],
            'phone' => $_POST["phone"],
            'email' => $_POST["email"],
            'pseudo' => $_POST["pseudo"],
        ]
    );

    if ($User->isUserValid()) {
        $Manager->insert($User);
        echo "utilisateur enregistré";
    } else {
        $errors = $User->getErrors();
    }
}

require_once("SRC/views/inscription.php");
