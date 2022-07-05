<?php

$allMapStations = $bdd->query('SELECT * FROM stations');

$tableauStations=[];

while ($mapStation = $allMapStations->fetch()) {
    extract($mapStation);

    $mps = [
        "id" => $id,
        "name" => $name,
        "lat" => $lat,
        "lon" => $lon,
        "adresse"=>$adresse
    ];
    array_push($tableauStations,$mps);
}

header('Content-Type: application/json'); 
echo json_encode($tableauStations);