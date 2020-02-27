<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<style>

    
    #heading{
        opacity:0.7;
    }
    
    #headwrap{
        border-radius: 6px 6px 0px 0px;
        margin-left: 20%;
        margin-right: 20%;
        background-color: white;
        opacity: 0.85;
    }
    body{
        background-image: url("chess.jpg");
         background-repeat: no-repeat;
         background-size: cover;
    }
    
    
    .form{
        
        background-color: white;
         border-radius: 2px 2px 8px 8px;
         margin-left: 20%;
         margin-right: 20%;
         opacity: 0.85;
        
        
    }
    input[type=submit]{
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        
        
    }
   
    .center{
     
        margin-left: 35%;
        margin-right: 35%;
    }
    
    input{
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none;
        display: block;
    }
    
    #register{
        background-color: #A8AFBA;
        border-radius: 0px 0px 4px 4px;
        height: 30px;
        
    }
    .paratext{
        color: white;
        font-size: 18px;
        
    }
    a{
        text-decoration: none;
        color: #FF6F63;
    }
</style>
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

<div id="wrapper">
<div id="headwrap">    
<h1 align= "center" style= "color: black" id="heading";>Welcome to Chess Academy</h1>
</div>

<div class="form">
<h2 align= "center" style= "color:#cc0000";>Sign In</h2>
<div class = "center">
<form  action="" method="post" name="login">
    
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />

<input class="c1" name="submit" type="submit" value="Login" />

</form>
</div>

<div id= "register">
    <p align = "center" class="paratext">Not registered yet? <a href='registration.php'>Register Here</a></p>
    
</div>

</div>
</div>
<?php } ?>
</body>
</html>

