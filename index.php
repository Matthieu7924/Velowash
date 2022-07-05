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
    require_once realpath("SRC/views/layout.php"); 
    ?>

</body>

</html>