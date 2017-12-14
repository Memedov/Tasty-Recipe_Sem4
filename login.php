<?php

/*
 * Shows the login view.
 */
use classes\controller\Controller;
require_once 'resources/fragments/init.php';

if(isset($_POST['uname']) && isset($_POST['psw']))
{
    $contr = Controller::createController();
    $result = $contr->login($_POST['uname'], $_POST['psw']);
    
    if($result == true)
    {
       $contr->setNickname($_POST['uname']);
       Controller::saveController($contr);
       include 'resources/views/loggedin.php';
       return;
    }
    
    else
    {
       include 'resources/views/loginfailed.php';
       return;
    }
    
}

$currentcontr = Controller::getSavedController();
if(!empty($currentcontr))
{
    session_unset();
    session_destroy();
    include 'resources/views/login.php';
    
}

else
{
    include 'resources/views/login.php';
}

