<!DOCTYPE html>
<html>
<head>
    <title>Tasty recipes- calendar</title>
    <link href="/resources/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/stylesheet.css" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
   <?php 
       include 'resources/fragments/navbar.php'; 
   ?>
   <h1>Sign up</h1>
   <div class = "transbox">
    <form method="POST" action="signup.php">  
        <div class="container">
            <p>*All fields require</p>
            <label>Username</label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Sign up</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>     
   </div>
</body>
</html>