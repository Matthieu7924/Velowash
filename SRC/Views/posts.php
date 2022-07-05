<h2>MESSAGES POSTES PAR <?php echo $_SESSION['login'] ?></h2>

<div class="messagesDiff">
    <?php
    foreach ($allposts as $post) {
    ?>
        <div class="listMessagesDiff">
            <div>
                <b><?php echo $post['pseudo']; ?></br></b>
            </div>
            <div>
                <?php echo $post['content']; ?></br>
                <?php echo $post['date']; ?></br></br>
            </div>
        </div>
    <?php
    }
    ?>

</div>