<?php

use classes\controller\Controller;
require_once 'resources/fragments/init.php';

if(isset($_POST['comment']) && !empty($_POST['comment']))
{
    
    $contr = Controller::getSavedController();
    $contr->addComment($_POST['comment'],$_POST['commenttype']);
    
    if($_POST['commenttype'] === 'meatballs')
    {
        include 'resources/views/meatballs.php';
        return;
    }
       
    
    if($_POST['commenttype'] === 'pancakes')
    {
        include 'resources/views/pancakes.php';
        return;
    }
        
}

if($_POST['commenttype'] === 'meatballs')
{
    include 'resources/views/meatballs.php';
    return;
}
        
    
if($_POST['commenttype'] === 'pancakes')
{
    include 'resources/views/pancakes.php';
    return;
}
       


