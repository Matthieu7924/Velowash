<?php

@$login = htmlentities($_POST["login"]);
@$pass = htmlentities($_POST["pass"]);
@$hashpass = password_hash($pass, PASSWORD_DEFAULT);
@$valider = $_POST["validerLog"];
$missLogin="";
$missPass="";
$MessError="identifiants invalides";


if (isset($valider)) {
    if (empty($login)) $missLogin .= "Veuillez renseigner un Login";  
    if (empty($pass)) $missPass .= "Veuillez renseigner un mot de passe";
    $sq = $bdd->prepare("SELECT * FROM users WHERE pseudo=:pseudo limit 1");
    $sq->bindValue('pseudo', $login);
    $sq->execute();
    $res = $sq->fetch(PDO::FETCH_ASSOC);
    if ($res) {
        $hashpass = $res['password'];
        if (password_verify($pass, $hashpass)) {
            $_SESSION["autoriser"] = "oui";
            $_SESSION["login"] = $login;
            $_SESSION["id"]= $res["id"];
            $_SESSION["name"]= $res["name"];
            $_SESSION["firstname"]= $res["firstname"];
            $_SESSION["email"]= $res["email"];
            $_SESSION['role']=$res["role"];
            header("location:/?page=session");
        } else {$MessError;
        }
    } 
}



require_once realpath("SRC/Views/login.php");
