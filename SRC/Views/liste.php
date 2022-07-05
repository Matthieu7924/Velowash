<?php
$bdd = new PDO('sqlite:../database/chat.db');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$allMapStations = $bdd->query('SELECT * FROM stations');

$tableauStations=[];
$tableauStations['stations']=[];


while ($mapStation = $allMapStations->fetch()) {
    extract($mapStation);

    $mps = [
        "id" => $id,
        "name" => $name,
        "lat" => $lat,
        "lon" => $lon,
    ];
    $tableauStations['stations'][] = $mps;
}

http_response_code(200);

echo json_encode($tableauStations);