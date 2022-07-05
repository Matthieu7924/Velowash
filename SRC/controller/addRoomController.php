<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:/?page=login");
}

if (
    isset($_POST['name'])
    and !empty($_POST['name'])

) {
    $room = htmlentities($_POST['name']);
    $catid = htmlentities($_POST['select']);
    $insertroo = $bdd->prepare('INSERT INTO room(name, catId)VALUES(?,?)');
    $insertroo->execute(array($room, $catid));
}

if (
    isset($_POST['roomsupp'])
    and !empty($_POST['roomsupp'])

) {
    $roomsupp = htmlentities($_POST['roomsupp']);
    $query = $bdd->prepare('DELETE FROM room WHERE name =:name');
    $RoomDelete = $query->execute([
        ':name' => htmlentities($_POST['roomsupp'])
    ]);
}
$allroom = $bdd->query('SELECT * FROM room ORDER BY name ASC');
$allcateg = $bdd->query('SELECT * FROM categories ORDER BY name ASC');

require_once realpath("SRC/views/addRoom.php");
