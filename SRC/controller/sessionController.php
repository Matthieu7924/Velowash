<?php
if (@$_SESSION["autoriser"] != "oui") {
    $_SESSION['id'] = $req['id'];
    $_SESSION['name'] = $req['name'];
    $_SESSION['firstname'] = $req['firstname'];
    $_SESSION['phone'] = $req['phone'];
    $_SESSION['email'] = $req['email'];
    $_SESSION['pseudo'] = $req['pseudo'];
    $_SESSION['password'] = $req['password'];
    $_SESSION['avatar'] = $req['avatar'];
    header("location:SRC/Views/login.php");
    exit();
}

if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
    $tailleMax = 2097152; // 2Mo (2 * 1024 * 1024 bytes)
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if ($_FILES['avatar']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if (in_array($extensionUpload, $extensionsValides)) {
            $chemin = "PUBLIC/avatars/" . $_SESSION['login'] . "." . $extensionUpload;
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
            if ($resultat) {
                // Débogage : Vérifier si le chemin est correct
                echo "Chemin de l'avatar : " . $chemin . "<br>";

                $updateavatar = $bdd->prepare('UPDATE users SET avatar = :avatar WHERE pseudo = :pseudo');
                $updateavatar->execute(array(
                    'avatar' => $_SESSION['login'] . "." . $extensionUpload,
                    'pseudo' => $_SESSION['login']
                ));

                // Débogage : Vérifier si la requête a été exécutée avec succès
                if ($updateavatar->rowCount() > 0) {
                    echo "Avatar mis à jour avec succès dans la base de données.<br>";
                } else {
                    echo "Erreur lors de la mise à jour de l'avatar dans la base de données.<br>";
                }

                header("location:/?page=session");
                exit();
            } else {
                $erreur = "Erreur durant l'importation de votre photo de profil";
            }
        } else {
            $erreur = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
        }
    } else {
        $erreur = "Votre photo de profil ne doit pas dépasser 2Mo";
    }
}

// Charger l'avatar depuis la base de données pour l'afficher
$showAvatar = $bdd->prepare('SELECT avatar from users WHERE pseudo = :pseudo');
$showAvatar->execute(array(
    'pseudo' => $_SESSION['login']
));
$avatar = $showAvatar->fetch();

require_once realpath("SRC/Views/session.php");
?>