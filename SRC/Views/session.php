<h2>Bienvenue dans votre espace privé <?= $_SESSION["login"] ?></h2>


<div class="sessmen">

    <div class="imgProfil">
        <?php
        if (isset($avatar['avatar'])) {
            echo
            '<img class="imgProfil" src="/PUBLIC/avatars/' . $_SESSION['login'] . '' . '.jpg" />';
        } else {
        ?>
            <img class="imgProfil" src="/PUBLIC/avatars/defaults/default.png" />
        <?php
        }
        ?>
    </div>

    <div class="sessTit">
        <?php
        echo $_SESSION['login'];
        ?>
    </div>


    <form class="sessForm" action="" method="post" enctype="multipart/form-data">
        <h3>MODIFIER L'AVATAR</h3>
        <input type="file" name="avatar">
        <input type="submit" name="submit" value="Mettre à jour mon profil !" />
    </form>



    <div class="sessLiens">
        <div>
            <a title="lien vers images postées" href="/?page=fichiers">Mes fichiers</a>
        </div>
        <div>
            <a title="lien vers messages postés" href="/?page=posts">Mes posts</a>
        </div>

    </div>