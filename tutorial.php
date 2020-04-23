<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Chess Game </title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href = "style2.css">
	<style type="text/css">
	#coins{
    	height: 113px;
    	    width: 110px;
    	    float: right;
    	    border: 1px solid grey;
    	    background: grey;
    	    opacity: 0.6;
    	    margin-right: 10px;
    	    border-radius: 50%;
    	    color: black;
    	    padding: 0;
    	    text-align: center;
    	    margin-top: 20px;
    	    
    	    
    	}
    	i{
    	    color: white;
    	}
    	.coin{
    	    height: 46px;
    	    width: 110px;
    	    padding: 0;
    	    margin: 0;
    	    overflow: auto;
    	    font-weight: bold;
    	    /*background-color:white;*/
    	    border-radius: 5px;
    	}
    
h1{
    
		text-align: center;
		color: #000000;
		
	

		}
		html,
 body{
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
			font-family: sans-sarif;
			/*background-color:#C69835;*/
			}
		div *{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			
		}
	
#links{
    
    float: right;
    height: 300px;
    padding-right:10%;
    margin-right: 20%;
    margin-top: 4%;
    height: 400px;
	 
}



#tutorial, #shop, #logout{
    background:LightSteelBlue;
	border-radius:17px;
	cursor:pointer;
	color:white;
	font-family:serif;
	font-size:30px;
	padding:6px 80px;
	margin: 15px;
	text-decoration: none;
	text-shadow:0px -1px 0px #2f6627;
	 
}
#tutorial:hover{
    	background:#96D96C;
}

a{
    text-decoration: none;
}
*{
	    
	}
	
	#goback{
	    margin-top: 40px;
	}
	
	</style>
</head>
<body
    <?php
    session_start();
        if(isset($_GET['colour']))
        {
            $colour = $_GET['colour'];
            $_SESSION['colour']= $colour;
        }
        @$colour_session = $_SESSION['colour'];
        
        echo "bgcolor=$colour_session";
        
        ?>
        >
<h1> Welcome to Chess Academy Tutorial </h1>
<div id= "coins" >
            <div class="coin"><i class="fas fa-coins fa-3x"></i></div>
            <div class="coin">Coins</div>
            <div class="coin" id="co">
                 <?php
    session_start();
            
    if (isset($_SESSION['username'])){
    
    $count=1;
    $user = $_SESSION["username"];
    $sel_query="Select coin from user where username = '$user'";
    $result = mysqli_query($con,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { ?>
    <td align="center"><?php echo $row["coin"]; 
   
    
    
    ?></td>
    

     <?php $count++; }
 }
 ?>
                
            </div>
        </div>

<div id="links">
    <div id = "tutorial" onclick="pawn.php">
        <a href="pawn.php">Pawn</a>
        
    </div>
    
    
    <div id = "tutorial" onclick="knight.php">
        <a href="knight.php">Knight</a>
        
    </div>
    
    <div id = "tutorial" onclick="bishop.php">
        <a href="bishop.php">Bishop</a>
        
    </div>
	 <div id = "tutorial" onclick="rook.php">
        <a href="rook.php">Rook</a>
        
    </div>
     <div id = "tutorial" onclick="queen.php">
        <a href="queen.php">Queen</a>
        
    </div>
	 <div id = "tutorial" onclick="king.php">
        <a href="king.php">King</a>
        
    </div>
    <div id= "goback">
        <div id = "tutorial" onclick="index.php">
        <a href="index.php">Main Menu</a>
        
    </div>
</div>

<script>


</script>
</body>
</html>