<?php
$bdd = new PDO('sqlite:../chat.db');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>
<div class="cadrepse">
<?php
foreach ($allUserMsg as $mess) {

?>
    <div class="pse">
        <b><?php echo $mess['pseudo']; ?></br></b>
        <?php echo $mess['content']; ?></br>
        <?php echo $mess['date']; ?></br></br>
    </div>
<?php
}
?>
</div>
<script src="index.js"></script>