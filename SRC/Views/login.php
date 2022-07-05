<div class="formulaire formLog">
    <h2>Connexion</h2>

    <form name="fo" method="post" action="">
        
        <div class="formDiv">
        <label for="name">Nom:</label>
        <div>
            <input class="formcase" type="text" name="login" placeholder="entrer votre pseudo" <?php if (isset($_POST["login"])) {echo "value='" . $_POST["login"]."'"; }  ?>/>
        </div>
        </div>
        <?php if ((!empty($missLogin))) { ?>
            <div class="miss"><?php echo $missLogin ?> </div>
        <?php } ?>
    

        <div class="formDiv">
        <label for="password:">Mot de passe:</label>
        <div>
            <input class="formcase" type="password" name="pass" placeholder="entrer votre mot de passe" <?php if (isset($_POST["pass"])) {echo "value='" . $_POST["pass"]."'"; }  ?>/>
        </div>
        <?php if (!empty($missPass)) { ?>
            <div class="miss"><?php echo $missPass ?> </div>
        <?php } ?>
        </div>
        
        <div>
            <input class="formcase" type="submit" name="validerLog" value="se connecter" />
        </div>
        <?php
if (isset($valider)&&($MessError)&&(empty($missLogin))&&(empty($missPass))){ ?>
    <div class="miss"><?php echo$MessError ?> </div>
    <?php } ?>

    </form>
    
</div>

<p>
    <a title="retour accueil" href="../index.php">retour Accueil</a>
</p>
</div>