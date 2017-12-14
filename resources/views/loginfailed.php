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
    <h1>LOGIN</h1>
    <div class = "transbox">
        <form method="post" action="/login.php">
            <div class="imgcontainer">
            <img src="resources/images/avatar.png" alt="Avatar" class="avatar">
            </div>
             
            <div class="container">
                <p>*invalid username or password</p>
                <p>*All fields require</p>
                <p><a href="signup.php">Don't have an account? Sign up here!</a></p>
                <label>Username</label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label>Password</label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
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