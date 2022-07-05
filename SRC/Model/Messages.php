<?php

namespace Messenger;

class Messages
{
    private 
        $errors=[],
        $id,
        $pseudo,
        $content,
        $room_id;

        CONST CONTENT_INVALID=1;


        public function __construct($pseudo,$content,$room_id)
        {
            $this->pseudo = $pseudo;
            $this->content = $content;
            $this->room_id = $room_id;
        }


    /////////////////SETTERS
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setContent(string $content)
    {
        if (!is_string($content) || empty($content)) {
            $this->errors[] = self::CONTENT_INVALID;
        } else {
            $this->content = $content;
        }
    }

    public function setRoom_id($room_id)
    {
        $this->room_id = $room_id;
    }





    /////////////////GETTERS
    public function getId():int
    {
        return $this->id;
    }

    public function getPseudo():string
    {
        return $this->pseudo;
    }

    public function getContent():string
    {
        return $this->content;
    }

    public function getRoom_id():int
    {
        return $this->room_id;
    }
}
