<?php

namespace Messenger;

class Rooms
{
    private
        $id,
        $name,
        $catId;


    public function __construct(string $name,)
    {
        $this->name = $name;
    }


    /////////////////SETTERS
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
            $this->name = $name;
    }

    public function setCatId(int $catId)
    {
            $this->catId = $catId;
    }



    /////////////////GETTERS
    public function getId():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getCatId():int
    {
        return $this->catId;
    }
}
