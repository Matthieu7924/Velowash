<h2>ENVOYER UNE PHOTO</h2>
<div class="fiche">
    <form class="formcase fichierForm" method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <button>Envoyer</button>
        </div>
    </form>

    <h2>Les images de tous les utilisateurs</h2>
    <div class="fichierDiff">
        <figure>
            <!-- Liste de toutes les images -->
            <?php foreach ($images as $image) { ?>
                <img class="gallimg" src="<?= $image['bin'] ?>" alt="image de profil">
            <?php } ?>
        </figure>
    </div>

    <h2>Les images de <?= $_SESSION['login'] ?></h2>
    <div class="fichierDiff">
        <figure>
            <!-- Liste de toutes ses images -->
            <?php foreach ($pictures as $picture) { ?>
                <img class="gallimg" src="<?= $picture['bin'] ?>" alt="">
            <?php } ?>
        </figure>
    </div>
</div>