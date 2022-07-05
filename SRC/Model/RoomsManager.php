<?php

namespace Messenger;
use \PDO;

class RoomsManager{
private $bddPDO;

public function __Construct(PDO $bddPDO)
{
$this->bddPDO=$bddPDO;
}

public function insert(Rooms $Room){
    $query=$this->bddPDO->prepare("INSERT INTO room (name)
    VALUES(:name)");
    $query->bindValue(':name',$Room->getName());
    $query->execute();
}

public function getRoom(){
    $query=$this->bddPDO->prepare('SELECT * FROM room');
    $query->execute();
    $Room= $query->fetchAll();
    $query->closeCursor();
    return $Room;
}

public function deleteRoom(){
    $query=$this->bddPDO->prepare('DELETE FROM room WHERE name =:name');
    $RoomDelete=$query->execute([
        ':name' => $_POST['roomsupp'],  
    ]);
    $query->execute();
    return $RoomDelete;
    header("Location:../admin.php");
}







}