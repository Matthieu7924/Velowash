<h2>MODIFIER UN UTILISATEUR</h2>

<form action="" method="post">
    <div class="form-group">
        <div><label>Name</label>
            <input class="form-control" type="text" name="name" value="<?= $User->getName() ?>">
        </div>
        <div><label>FirstName</label>
            <input class="form-control" type="text" name="firstname" value="<?= $User->getFirstName() ?>">
        </div>
        <div><label>Phone</label>
            <input class="form-control" type="text" name="phone" value="<?= $User->getPhone() ?>">
        </div>
        <div><label>Email</label>
            <input class="form-control" type="text" name="email" value="<?= $User->getEmail() ?>">
        </div>
        <div><label>Pseudo</label>
            <input class="form-control" type="text" name="pseudo" value="<?= $User->getPseudo() ?>">
        </div>
        <button>Sauvegarder</button>
    </div>
</form>

<p>
    <a href="/?page=admin">Liste des utilisateurs</a>
</p>