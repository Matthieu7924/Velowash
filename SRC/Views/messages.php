<?php


$id = $_GET['id'];


$req = $bdd->query('SELECT messages.pseudo, messages.content, messages.date, users.id, users.pseudo FROM messages, users
WHERE users.pseudo = messages.pseudo AND users.id = {$id} ');
$allusers=$req->fetch();

echo"<pre>";
var_dump($allusers);
echo"</pre>";



foreach ($allusers as $user) {

?>
    <div class="pse">
        <b><?php echo $allusers['pseudo']; ?></br></b>
        <?php echo $allusers['content']; ?></br>
        <?php echo $allusers['date']; ?></br>
    </div>
<?php
}
?>

<script src="index.js"></script>
