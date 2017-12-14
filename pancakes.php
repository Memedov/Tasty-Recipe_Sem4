<?php

/*
 * Shows the pancakes view 
 */

require_once 'resources/fragments/init.php';
use classes\controller\Controller;

$contr = Controller::getSavedController();
if(empty($contr))
{
    $contr = new Controller();
    Controller::saveController($contr);
}

include 'resources/views/pancakes.php';

