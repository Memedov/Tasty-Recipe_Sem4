<?php

namespace classes\model;

use classes\integration\databaseHandler;

class RegisterUser
{
    
    private $databaseHandler;
    
    public function __construct()
    {
        $this->databaseHandler = new databaseHandler();
    }
    
    public function RegisterUser($uname,$psw)
    {
        $uname = htmlentities($uname, ENT_QUOTES);
        $psw = htmlentities($psw, ENT_QUOTES);
        if(ctype_print($uname) && ctype_print($psw))
        {
            $password = password_hash($psw, PASSWORD_DEFAULT);
            $this->databaseHandler->insertUser($uname, $password);
        }
    }
}

