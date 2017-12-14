<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Tasty recipes</title>
    <link href="/resources/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/stylesheet.css" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
   <?php 
       include 'resources/fragments/navbar.php'; 
   ?>
   <h1>Tasty Recipes</h1>
   <div class="transbox">
    <h2>Welcome 
        <?php
            use classes\controller\Controller;
            $contr = Controller::getSavedController();
            echo $contr->getNickname();
        ?>!
    </h2>
   </div>
</body>
</html>
