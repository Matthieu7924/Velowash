<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:/?page=login");
}

if (
    isset($_POST['station'])
    and !empty($_POST['station'])
) {
    $station = htmlentities($_POST['station']);
    $lat = htmlentities($_POST['lat']);
    $lon = htmlentities($_POST['lon']);
    $adress = htmlentities($_POST['adresse']);
    $insertstation = $bdd->prepare('INSERT INTO stations(name,lat,lon,adresse)VALUES(?,?,?,?)');
    $insertstation->execute(array($station, $lat, $lon, $adress));
}

if (
    isset($_POST['selectSupp'])
    and !empty($_POST['selectSupp'])
) {
    $query = $bdd->prepare('DELETE FROM stations WHERE id =:id');
    $query->execute([
        ':id' => htmlentities($_POST['selectSupp'])
    ]);
}

$allstations = $bdd->query('SELECT * FROM stations ORDER BY name ASC');
$allStations = $bdd->query('SELECT * FROM stations ORDER BY name ASC');

require_once realpath("SRC/views/addStation.php");
