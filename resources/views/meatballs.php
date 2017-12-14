<!DOCTYPE html>
<html>
<head>
    <title>Tasty recipes - meatballs</title>
    <link href="/resources/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/stylesheet.css" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src ="/resources/js/comments.js"></script>
</head>
<body>
   <?php 
       include 'resources/fragments/navbar.php'; 
   ?>
   <h1>Meatballs</h1>
   <div class="transbox">
    <img alt="image of swedish meatballs" src="resources/images/meatballs.jpg">
    <h2>Prep: 15 min | Total: 40 min | Servings: 4</h2>
    <h2>Ingredients</h2>
    <p>1 lb lean (at least 80%) ground beef<br>
    1/2 cup Progresso™ Italian-style bread crumbs<br>
    1/4 cup milk<br>
    1/2 teaspoon salt<br>
    1/2 teaspoon Worcestershire sauce<br>
    1/4 teaspoon pepper<br>
    1 small onion, finely chopped(1/4 cup)<br>
    1 egg</p>
    <h2>Steps</h2>
    <p>1. Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.<br>
    2. In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.<br>
    3. Bake uncovered 18 to 22 minutes or until no longer pink in center.</p>
 
    <?php
        include 'resources/fragments/commentboxMB.php';
    ?>
       
    <h4>What others are saying...</h4>
    <hr>
    <button id="loadMB">Update comments</button>
    <p hidden id="nickNamelabel" ><?php echo $contr->getNickname();?></p>
    <div class="commentbox"> 
   </div>		
  </div>
</body>
</html>