
<div class="all">
    <ul>LISTE DES ROOMS</br>
        <?php
        $allrooms = $bdd->query('SELECT * FROM room ORDER BY name ASC');
        while ($room = $allrooms->fetch()) {
        ?>
            <li><?php echo $room['name']; ?></li>
        <?php
        }
        ?>
    </ul>
</div>
<a href='../index.php'>RETOUR</a>