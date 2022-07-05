<h2>SUPPRIMER UN UTILISATEUR</h2>
<div class="delUs">

    <div class="contmsg delMsgUs">
        <form action="" method="post">
            <div>
                <input type="text" name="name" value="<?= $User->getName() ?>">
            </div>
            <button>Supprimer</button>
        </form>

        <p>
            <a href="/?page=admin">Liste des utilisateurs</a>
        </p>
    </div>
</div>