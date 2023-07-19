<?php

$stations = $bdd->query('SELECT * FROM stations ORDER BY name');
$stations2 = $bdd->query('SELECT * FROM stations ORDER BY name');

if (
    isset($_POST['note'])
    and !empty($_POST['note'])
) {
    $note = htmlentities($_POST['note']);
    $stationNote = htmlentities($_POST['select']);
    $pseudo = $_SESSION['login'];

    $insertnote = $bdd->prepare('INSERT INTO notes(note,name_station,pseudo)VALUES(?,?,?)');
    $insertnote->execute(array($note, $stationNote, $pseudo));
}

if (isset($_POST['select'])) {
    $stationNote = $_POST['select'];
    $query = $bdd->prepare('SELECT AVG(note)AS moyenne from notes WHERE name_station = ?');
    $query->execute(array($stationNote));
    $stationUniqueNote = $query->fetchAll();
}

require_once realpath("SRC/Views/carte.php");
