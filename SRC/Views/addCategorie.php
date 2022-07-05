<div class="dgcaro">
    <div class="dgcaro1">
        <div class="dcaro">
            <h2>AJOUT CATEGORIE</h2>
            <form action="" method="post">
                <input type="text" name="categorie" placeholder="CATEGORIE" /></br />
                <input type="submit" value="Ajouter" />
            </form>
        </div>
        <div class="dcaro">
            <h2>SUPPRESSION CATEGORIE</h2>
            <form action="" method="post">
                <input type="text" name="categoriesupp" placeholder="CATEGORIE" /></br />
                <input type="submit" value="Supprimer" /><i class="fas fa-plus-circle"></i>
            </form>
        </div>
    </div>
    <div class="dgcaro2">
        <ul class="liscaro">LISTE DES CATEGORIES</br>
            <?php
            forEach ($allcateg as $cat) {
            ?>
                <li><?php echo $cat['name']; ?></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>