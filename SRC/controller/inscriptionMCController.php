<?php

@$nom = htmlentities($_POST["nom"]);
@$prenom = htmlentities($_POST["prenom"]);
@$phone = htmlentities($_POST["phone"]);
@$email = htmlentities($_POST["email"]);
@$login = htmlentities($_POST["login"]);
@$pass = htmlentities($_POST["pass"]);
@$hashpass=password_hash($pass,PASSWORD_DEFAULT);
@$repass = htmlentities($_POST["repass"]);
@$imgprof = htmlentities($_POST["imageProfil"]);
@$valider = $_POST["validerReg"];

$messageName = "";
$messageFirstName = "";
$messagePhone = "";
$messageWrongPhone = "";
$messageMail="";
$invalidMail="";
$messageLogin = "";
$messagePass = "";
$messageWrongPass = "";
if (isset($valider)) {
    if (empty($nom)) $messageName = "Nom invalide!";
    if (empty($prenom)) $messageFirstName .= "Prénom invalide!";
    if (empty($phone)) $messagePhone .= "Phone invalide!";
    if (empty($email))$messageMail .= "Email invalide!";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $invalidMail .="email invalide";
    if (empty($login)) $messageLogin .= "Login invalide!";
    if (empty($pass)) $messagePass .= "Mot de passe invalide!";
    if ($pass != $repass) $messageWrongPass .= "Mots de passe non identiques!";
    if (empty($messageName)&&empty($messageFirstName)&&empty($messagePhone)&&empty($messageWrongPhone)&&empty($messageMail)&&empty($invalidMail)&&empty($messageLogin)&&empty($messagePass)&&empty($messageWrongPass)) {
        $req = $bdd->prepare("SELECT id FROM users WHERE pseudo=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($login));
        $tab = $req->fetchAll();
        if (count($tab) > 0)
            $message = "login existe déjà";
        else {
            $ins = $bdd->prepare("INSERT INTO users(name,firstname,phone,email,pseudo,password)
        VALUES(?,?,?,?,?,?)");
            $ins->execute(array($nom,$prenom,$phone,$email,$login,$hashpass));
            header("location: /?page=login");
            exit();
        }
    }
}

require_once realpath("SRC/Views/inscriptionMC.php");


