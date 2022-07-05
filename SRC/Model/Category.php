<?php

namespace Messenger;

class Category
{
    private
        $id,
        $name;
    public function __construct(string $name)
    {
        $this->id = $name;
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
    /////////////////GETTERS
    public function getId():int
    {
        return $this->id;
    }
    public function getName():string
    {
        return $this->name;
    }
}
