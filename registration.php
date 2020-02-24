<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body >

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
        $query = "INSERT into `user` (username, password)
VALUES ('$username', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input class = "c1"type="submit" name="submit" value="Register" />
</form>
<br/>
 <a href='login.php'>Return To Login</a></p>
</div>
<?php } ?>
</body>
</html>

