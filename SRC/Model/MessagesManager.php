<?php

namespace Messenger;
use \PDO;

class MessagesManager{
private $bddPDO;

public function __Construct(\PDO $bddPDO)
{
$this->bddPDO=$bddPDO;


}

public function insert(Messages $Message){
    $date = date_default_timezone_set('Europe/Paris');
    $date = date('d-m-Y H:i:s');
    $id=$_SESSION['id'];
    $query=$this->bddPDO->prepare("INSERT INTO messages (pseudo,content,room_id,date,user_id)
    VALUES(:pseudo,:content,:room_id,:date,:user_id)");
    $query->bindValue(':pseudo',$Message->getPseudo());
    $query->bindValue(':content',$Message->getContent());
    $query->bindValue(':room_id',$Message->getRoom_id());
    $query->bindValue(':date',$date);
    $query->bindValue(':user_id',$id);
    $query->execute();
}

public function getListMessages(){
    $query=$this->bddPDO->query('SELECT * FROM messages ORDER BY name ASC');
    $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\App\Messenger\Messages');
    $listMessages = $query->fetchAll();
    $query->closeCursor();
    return $listMessages;
}

public function getMessage($id){
    $query=$this->bddPDO->prepare('SELECT * FROM messages WHERE id= :id');
    $query->bindValue(':id' ,(int) $id, PDO::PARAM_INT);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\App\Messenger\Messages');
    $Message= $query->fetch();
    $query->closeCursor();
    return $Message;
}

public function editMessage(Messages $Message){
    $query=$this->bddPDO->prepare('UPDATE messages SET pseudo= :pseudo,content= :content, room_id=:room_id  WHERE id=:id');
    $query->bindValue(':id',$Message->getId());
    $query->bindValue(':pseudo',$Message->getPseudo());
    $query->bindValue(':room_id',$Message->getRoom_id());
    $query->execute();
}


public function deleteMessage($id){
    $query=$this->bddPDO->prepare('DELETE FROM messages WHERE id=:id');
    $query->execute([
        'id' => $id,  
    ]);
}






}