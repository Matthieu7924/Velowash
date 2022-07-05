<div class="formulaire forminsc">
    <h2>Inscription</h2>
    <form name="fo" method="post" action="" enctype="multipart/form-data">

        <div class="fi1">
            <div class="insc1">

                <div class="formDiv">
                    <label for="name">Nom:</label>
                    <div>
                    <input class="formcase" type="text" name="nom" placeholder="entrer un nom" <?php if(isset($_POST["nom"])) { echo "value='".$_POST["nom"]."'"; }  ?> />
                    <?php if (!empty($messageName)) { ?>
                        <div class="miss"><?php echo $messageName ?></div>
                    <?php } ?>
                    </div>
                </div>

                
                <div class="formDiv">
                    <label for="prénom">Prénom:</label>
                    <div>
                        <input class="formcase" type="text" name="prenom" placeholder="entrer un prénom" <?php if(isset($_POST["prenom"])) { echo "value='".$_POST["prenom"]."'"; }  ?>/>
                        <?php if (!empty($messageFirstName)) { ?>
                            <div class="miss"><?php echo $messageFirstName?></div>
                        <?php } ?>
                    </div>
                </div>

                <div class="formDiv">
                    <label for="tel">Téléphone:</label>
                    <div>
                        <input class="formcase" type="text" name="phone" placeholder="entrer un n° de tel"/>
                        <?php if (!empty($messagePhone)) { ?>
                            <div class="miss"><?php echo $messagePhone ?><?php echo $messagePhone ?></div>
                        <?php } ?>
                        <?php if (!empty($messageWrongPhone)) { ?>
                            <div class="miss"><?php echo $messageWrongPhone ?><?php echo $messagePhone ?></div>
                        <?php } ?>
                    </div>
                </div>


                <div class="formDiv">
                    <label for="email">Email:</label>
                    <div>
                        <input class="formcase" type="text" name="email" placeholder="entrer un email"/>
                        <?php if (!empty($email)) { ?>
                            <div class="miss"><?php echo $messageMail ?></div>
                        <?php } ?>
                        <?php if (!empty($invalidMail)) { ?>
                            <div class="miss"><?php echo $invalidMail ?></div>
                        <?php } ?>    
                    </div>
                </div>


                <div class="formDiv">
                    <label for="login">Login:</label>
                    <div class="insc2">
                        <input class="formcase" type="text" name="login" placeholder="entrer un pseudo" <?php if(isset($_POST["login"])) { echo "value='".$_POST["login"]."'"; }  ?> />
                    </div>
                    <?php if (!empty($messageLogin)) { ?>
                        <div class="miss"><?php echo $messageLogin ?></div>
                    <?php } ?>
                </div>

                <div class="formDiv">
                    <label for="password">Mot de passe:</label>
                    <div>
                        <input class="formcase" type="password" name="pass" placeholder="entrer un password" <?php if(isset($_POST["repass"])) { echo "value='".$_POST["repass"]."'"; }  ?>/>
                    </div>
                    <?php if (!empty($messagePass)) { ?>
                        <div class="miss"><?php echo $messagePass?></div>
                    <?php } ?>
                    <?php if (!empty($messageWrongPass)) { ?>
                        <div class="miss"><?php echo $messageWrongPass?></div>
                    <?php } ?>
                

                    <div>
                        <input class="formcase" type="password" name="repass" placeholder="confirmer le password" <?php if(isset($_POST["repass"])) { echo "value='".$_POST["repass"]."'"; }  ?>/>
                    </div>
                    <?php if (!empty($invalidPass)) { ?>
                        <div class="miss"><?php echo $invalidPass?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="fi1">
            <div>
                <input class="formcase" type="submit" name="validerReg" value="S'inscrire" />
            </div>
        </div>

    </form>




    <p>
        <a title="retour Accueil" href="../index.php">retour Accueil</a>
    </p>


</div>




