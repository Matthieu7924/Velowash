<?php
use \Messenger\Messages;
use \Messenger\MessagesManager;

$MessageManager = new MessagesManager($bdd);

if (isset($_GET['supp'])) {
    $id=$_GET['supp'];
    $MessageManager->deleteMessage($id);
    }

    $allmsg = $bdd->query('SELECT * FROM messages ORDER BY id DESC');

require_once realpath("SRC/Views/editAllMessages.php");