<?php

    while ($msg = $allmsg->fetch()) {
    ?>
    <div class="contmsg">
        <div class="chmsg">
            <div class="pse">
                <b><?php echo $msg['pseudo']; ?></br></b>
                <?php echo $msg['content']; ?></br>
                <?php echo $msg['date']; ?></br></br>
            </div>
            <div class="editdel">
                <a href="/?page=messages&supp=<?= $msg['id'] ?>">SUPPRIMER</a>
            </div>
        </div>
    </div>
<?php
    }
    ?>