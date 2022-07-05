<?php

namespace Authentification;

class Users
{
    private $errors=[],
    $id,
    $name,
    $firstname,
    $phone,
    $email,
    $pseudo,
    $password;

    CONST NAME_INVALID=1;
    CONST FIRSTNAME_INVALID=2;
    CONST EMAIL_INVALID=3;
    CONST PSEUDO_INVALID=4;
    CONST PASSWORD_INVALID=5;


    public function __construct($data=[])
    {
    $this->hydrater($data);
    }

    public function hydrater($data)
    {
        foreach($data as $attribut=>$value)
            {
            $settersMethod='set'.ucfirst($attribut);
            $this->$settersMethod($value);
            }    
    }

    public function isUserValid()
    {
    return !(empty($this->name)||empty($this->firstname)||empty($this->email));
}


    /////////////////SETTERS
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        if(!is_string($name)||empty($name))
        {
        $this->errors[]=self::NAME_INVALID;
        }
        else
        {
        $this->name = $name;
        }
    }

    public function setFirstname(string $firstname)
    {
        if(!is_string($firstname)||empty($firstname))
        {
        $this->errors[]=self::FIRSTNAME_INVALID;
        }
        else
        {
        $this->firstname = $firstname;
        }
    }

    public function setPhone(int $phone)
        {
        $this->phone = $phone;
        }


    public function setEmail(string $email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
            $this->email = $email;
            }
            else
            {
            $this->errors[]=self::EMAIL_INVALID;
            }
    }

    public function setPseudo(string $pseudo)
    {
    $this->pseudo = $pseudo;
    }

    public function setPassword(string $password)
    {
    $this->password = $password;
    }

    public function setErrors($errors)
    {
    $this->errors = $errors;
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

    public function getFirstname():string
    {
    return $this->firstname;
    }

    public function getPhone():int
    {
    return $this->phone;
    }

    public function getEmail():string
    {
    return $this->email;
    }

    public function getPseudo():string
    {
    return $this->pseudo;
    }

    public function getPassword():string
    {
    return $this->password;
    }

    public function getErrors()
    {
    return $this->errors;
    }

    
}
