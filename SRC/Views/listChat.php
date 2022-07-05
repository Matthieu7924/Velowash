 <div class="all">

        <div class="listVelos">
            <h1>LISTE DES VELOS</h1></br>

            <?php foreach ($allcateg as $cat) { ?>

                <?php echo "<h6>" . $cat['name'] . "</h6>" ?>
                <ul>
                    <?php foreach ($allroom as $room) {
                        if ($cat['id'] === $room['catId']) { ?>
                            <li><?php echo $room['name']; ?></li>
                    <?php }
                    } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
    <a href='../index.php'>RETOUR</a>