<?php

namespace classes\model;

use classes\integration\databaseHandler;

class HandleLogin
{
    private $databaseHandler;
    
    public function __construct()
    {
        $this->databaseHandler = new databaseHandler();
    }
    
    public function verifyLogin($uname,$psw)
    {
        if(ctype_print($uname) && ctype_print($uname))
        {
            $loginData = $this->databaseHandler->getUsers();
            $accessData = array();
            foreach ($loginData as $line) {
            list($username, $password) = explode(',', $line);
            $accessData[trim($username)] = trim($password);
            }

            if (array_key_exists($uname, $accessData) && password_verify($psw,$accessData[$uname]))
            {
                return true;
            } 

            else 
            {
                return false;
            }
    }   }
}

