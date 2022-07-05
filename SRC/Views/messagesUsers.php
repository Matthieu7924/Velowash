<?php
$bdd = new PDO('sqlite:../chat.db');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $allmsg = $bdd->query('SELECT * FROM messages ORDER BY date ASC');
    while ($msg = $allmsg->fetch()) {

    ?>
                <div class="pse">
                    <b><?php echo $msg['pseudo']; ?></br></b>
                    <?php echo $msg['content']; ?></br>
                    <?php echo $msg['date']; ?></br></br>
                </div>
    <?php
    }
    ?>

<script src="index.js"></script>
