<?php

/*
 * Shows the signup view
 */
use classes\controller\Controller;
require_once 'resources/fragments/init.php';

if(isset($_POST['uname']) && isset($_POST['psw']) &&!empty($_POST['uname'] &&!empty($_POST['psw'])))
{
    $contr = Controller::createController();
    $contr->registerUser($_POST['uname'], $_POST['psw']);
    include 'resources/views/login.php';
}

else
{
    include 'resources/views/signup.php';
}
