<?php

$usersManager = new \Authentification\UsersManager($bdd);
?>

    <h2>LISTE DES UTILISATEURS</h2>

    <?php foreach ($usersManager->getListUsers() as $User) : ?>
        <div class="gbig">
            <div>
                <div><?= $User->getName() ?></div>
                <div><?= $User->getFirstName() ?></div>
                <div><?= $User->getPhone() ?></div>
                <div><?= $User->getEmail() ?></div>
                <div><?= $User->getPseudo() ?></div>
            </div>
            <div class="dbutt">
                <a class="butt" href="/?page=edit_user&id=<?= $User->getId() ?>"> Modifier </a>
                <a class="butt" href="/?page=delete_user&id=<?= $User->getId() ?>"> Supprimer</a>
                <a class="butt" href="/?page=messages"> Voir tous les Messages</a>
                <a class="butt" href="/?page=messages_user&id=<?= $User->getId() ?>"> Voir les Messages de <?= $User->getPseudo() ?> </a>
            </div>
        </div>
    <?php endforeach ?>

        <a title="retour Accueil"href="../index.php">retour Accueil</a>
    
