<div class="dgcaro">
    <div class="dgcaro1">
        <div class="dcaro">
            <h2>AJOUT STATION</h2>
            <form action="" method="post">
                <input type="text" name="station" placeholder="STATION" /></br />
                <input type="text" name="lat" placeholder="LATITUDE" /></br />
                <input type="text" name="lon" placeholder="LONGITUDE" /></br />
                <input type="text" name="adresse" placeholder="Adresse" /></br />
                <input type="submit" value="Ajouter" />
            </form>
        </div>
        <div class="dcaro">
            <h2>SUPPRESSION STATION</h2>
            <form action="" method="post">
                <select name="selectSupp">
                    <?php foreach ($allStations as $stat) { ?>
                        <option value="<?php echo $stat['id']; ?>">
                            <?php echo $stat['name']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select></br>
                <input type="submit" value="Supprimer" />
            </form>
        </div>
    </div>
    <div class="dgcaro2">
        <ul class="liscaro">LISTE DES STATIONS</br>
            <?php
            foreach ($allstations as $station) {

            ?>
                <li><?php echo $station['name']; ?></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>