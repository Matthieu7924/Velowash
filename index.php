<?php
ob_start();
//ob start est nécessaire pour éviter l'erreur suivante Warning: Cannot modify header information - headers already sent by.....ob_end_flush();est renseigné dans le fichier deconnexionController.php
session_start();
require("connect.php");
require("SRC/Model/Users.php");
require("SRC/Model/UsersManager.php");
require("SRC/Model/Category.php");
require("SRC/Model/CategoryManager.php");
require("SRC/Model/Rooms.php");
require("SRC/Model/RoomsManager.php");
require("SRC/Model/Messages.php");
require("SRC/Model/MessagesManager.php");

use \Authentification\Users;
use \Authentification\UsersManager;
use \Messenger\Rooms;
use \Messenger\Category;
use \Messenger\Messages;
use \Messenger\RoomsManager;
use \Messenger\CategoryManager;
use \Messenger\MessagesManager;

$env = getenv('APP_ENV') ?: 'dev';

if ($env === 'prod') {
    // Configuration pour l'environnement de production
    $databaseUrl = getenv('CLEARDB_DATABASE_URL');
    $url = parse_url($databaseUrl);

    $bdd = new PDO(
        'mysql:host=' . $url['host'] . ';dbname=' . substr($url['path'], 1),
        $url['user'],
        $url['pass']
    );
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Utilisez la variable $bdd pour la connexion à votre base de données
} else {
    // Configuration pour l'environnement de développement local
    // $bdd = new PDO('sqlite:SRC/database/chat.db');
    $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}


$catManager = new CategoryManager($bdd);
$roomManager = new RoomsManager($bdd);
$messManager = new MessagesManager($bdd);
$usersManager = new UsersManager($bdd);
$User = new Users($bdd);

//Routage de l'api
if (isset($_GET['page'])&&($_GET["page"]=="data")) {
    require_once realpath("SRC\controller\listStationsAjaxController.php");
    return;
}
?>
<body>
    <?php 
    require_once realpath("SRC/Views/layout.php"); 
    ?>

</body>

</html>