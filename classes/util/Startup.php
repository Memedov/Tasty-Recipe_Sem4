<?php

namespace classes\util;

class Startup
{
    public static function initrequest()
    {
        self::loadclasses();
        session_start();
    }
    
    private static function loadclasses()
    {
        require_once 'classes/controller/Controller.php';
        require_once 'classes/model/HandleLogin.php';
        require_once 'classes/model/RegisterUser.php';
        require_once 'classes/model/CommentHandler.php';
        require_once 'classes/integration/databaseHandler.php';
    }
}

