<h2>CHOISIR UNE STATION</h2>

<section class="scarte">
    <!-- ajout de cette div avant l'appel de la carte pour éviter l'erreur  mapcontainer not found-->
    <div id="leafletmap">
        <div id="map"></div>
    </div>
    <div class="cartechoix">
        <select name="selector">
            <?php
            foreach ($stations2 as $station2) {
            ?>
                <option value="
                        <?php
                        echo $station2['id'];
                        ?>
                        <!-- ">
                    <?php
                    echo $station2['name'];
                    ?>
                </option>
            <?php
            }
            ?>
        </select></br>
    </div>
    <div class="formcase formCarte">
        <h2>NOTER UNE STATION</h2>
        <form action="" method="POST">
            <div class="avis1">
                <label for="titre">Station</label>
                <select class="avisSelect" name="select">
                    <?php foreach ($stations as $station) { ?>
                        <option value="<?php echo $station['id']; ?>">
                            <?php echo htmlentities($station['name']); ?>
                        </option>
                    <?php
                    }
                    ?>
                </select></br>
                <!-- si l'utilisateur est connecté il peut noter la station -->
                <?php if (isset($_SESSION['login'])) {
                ?>
            </div>
            <?php
                    if (isset($_SESSION['login'])) { ?>
                <div class="avis2">
                    <div class="stars">
                        <i class="lar la-star" data-value="1"></i>
                        <i class="lar la-star" data-value="2"></i>
                        <i class="lar la-star" data-value="3"></i>
                        <i class="lar la-star" data-value="4"></i>
                    </div>
                    <div>
                        <input type="hidden" name="note" id="note" value="0">
                        <button type="submit" value="envoiNote">Envoyer</button>
                    </div>
                <?php } ?>
                <div class="noteAff">
                    <h3>note moyenne pour cette station:</h3>
                    <div class="moyenne">
                    <?php
                    if (isset($stationUniqueNote)) {
                        foreach ($stationUniqueNote[0] as $key => $value) {
                        }
                        print number_format($value, 1, '.', ',') . "<br>";
                    }
                } ?>
                    </div>
                </div>
                </div>
        </form>
    </div>
</section>
<!-- <script src="PUBLIC/JS/carte2.js"></script> -->
<script src="PUBLIC/JS/carte.js"></script>
