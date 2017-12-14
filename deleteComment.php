<?php

require_once 'resources/fragments/init.php';
use classes\controller\Controller;

if(isset($_POST['delete'])){
    
    $contr = Controller::getSavedController();
    $contr->deleteComment($_POST['timestamp'],$_POST['commenttype']);
    
    if($_POST['commenttype'] === 'meatballs'){
        include 'resources/views/meatballs.php';
    }
    if($_POST['commenttype'] === 'pancakes'){
        include 'resources/views/pancakes.php';
    }
}
