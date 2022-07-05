<?php

namespace Authentification;
use \PDO;

class UsersManager{
private $bddPDO;

public function __Construct(PDO $bddPDO)
{
$this->bddPDO=$bddPDO;
}

public function insert(Users $User){
    $query=$this->bddPDO->prepare("INSERT INTO users (name,firstname,phone,email,pseudo,password)
    VALUES(:name,:firstname,:phone,:email,:pseudo, :password)");
    $query->bindValue(':name',$User->getName());
    $query->bindValue(':firstname',$User->getFirstname());
    $query->bindValue(':phone',$User->getPhone());
    $query->bindValue(':email',$User->getEmail());
    $query->bindValue(':pseudo',$User->getPseudo());
    $query->bindValue(':password',$User->getPassword());
    $query->execute();
}

public function getListUsers(){
    $query=$this->bddPDO->query('SELECT * FROM users ORDER BY name ASC');
    $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\Authentification\Users');
    $listUsers = $query->fetchAll();
    $query->closeCursor();
    return $listUsers;
}

public function getUser($id){
    $query=$this->bddPDO->prepare('SELECT * FROM users WHERE id= :id');
    $query->bindValue(':id' ,(int) $id, PDO::PARAM_INT);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\Authentification\Users');
    $User= $query->fetch();
    $query->closeCursor();
    return $User;
}

public function editUser(Users $User){
    $query=$this->bddPDO->prepare('UPDATE users SET name= :name,firstname= :firstname, phone=:phone, email=:email, pseudo=:pseudo  WHERE id=:id');
    $query->bindValue(':id',$User->getId());
    $query->bindValue(':name',$User->getName());
    $query->bindValue(':firstname',$User->getFirstname());
    $query->bindValue(':phone',$User->getPhone());
    $query->bindValue(':email',$User->getEmail());
    $query->bindValue(':pseudo',$User->getPseudo());
    $query->execute();
}

public function deleteUser(){
    $query=$this->bddPDO->prepare('DELETE FROM users WHERE name =:name');
    $UserDelete=$query->execute([
        'name' => $_POST['name'],  
    ]);
    $query->execute();
    return $UserDelete;
     header("Location:../admin.php");
}

public function editList($id){
    $query=$this->bddPDO->prepare('SELECT messages.pseudo, messages.content, messages.date, users.id, users.pseudo FROM messages, users
    WHERE users.pseudo = messages.pseudo AND id= :id');
    $query->bindValue(':id' ,(int) $id, \PDO::PARAM_INT);
    $query->execute();
    $List= $query->fetch();
    $query->closeCursor();
    return $List;
}


public function connect(){
    $query=$this->bddPDO->prepare('SELECT email, password FROM users
    WHERE users.pseudo = messages.pseudo AND id= :id');
 
}

}