<?php

namespace Messenger;
use \PDO;

class CategoryManager{
private $bddPDO;

public function __Construct(PDO $bddPDO)
{
$this->bddPDO=$bddPDO;
}

public function insert(Category $Cat){
    $query=$this->bddPDO->prepare("INSERT INTO categories (name)
    VALUES(:name)");
    $query->bindValue(':name',$Cat->getName());
    $query->execute();
}

public function getCategory(){
    $query=$this->bddPDO->prepare('SELECT * FROM categories');
    $query->execute();
    $Cat= $query->fetchAll();
    $query->closeCursor();
    return $Cat;
}

public function editCategory(Category $Cat){
    $query=$this->bddPDO->prepare('UPDATE categories SET name= :name WHERE id=:id');
    $query->bindValue(':id',$Cat->getId());
    $query->bindValue(':name',$Cat->getName());
    $query->execute();
}

public function deleteCategory(){
    $query=$this->bddPDO->prepare('DELETE FROM categories WHERE name =:name');
    $CatDelete=$query->execute([
        ':name' => $_POST['name'],  
    ]);
    $query->execute();
    return $CatDelete;
    header("Location:../admin.php");
}

}