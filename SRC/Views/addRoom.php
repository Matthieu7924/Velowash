<div class="dgcaro">
    <div class="dgcaro1">
        <div class="dcaro">
            <h2>AJOUT ROOM</h2>
            <form action="" method="post">
                <select name="select">
                    <?php foreach ($allcateg as $cat) { ?>
                        <option value="<?php echo $cat['id']; ?>">
                            <?php echo $cat['name']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select></br>
                <input type="text" name="name" placeholder="ROOM" /></br />
                <input type="submit" value="Ajouter" />
            </form>
        </div>
        <div class="dcaro">
            <h2>SUPPRESSION ROOM</h2>
            <form action="" method="post">
                <input type="text" name="roomsupp" placeholder="ROOM" /></br />
                <input type="submit" value="Supprimer" />
            </form>
        </div>
    </div>
    <div class="dgcaro2">
        <ul class="liscaro">LISTE DES ROOM</br>
            <?php
            foreach ($allroom as $room) {
            ?>
                <li><?php echo $room['name']; ?></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>