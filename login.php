<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />

</head>
<body >   
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
      
 $username = stripslashes($_REQUEST['username']);
        
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
        $query = "SELECT * FROM `user` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<h1 align= "center" style= "color:#001a00";>Welcome to Chess Academy</h1>
<div class="form">
<h2 align= "center" style= "color:#cc0000";>Sign In</h2>
<form align= "center" action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input class="c1" name="submit" type="submit" value="Login" />
</form>
<p align = "center">Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>

