<?php
require('db.php');
include("auth.php");
?>



<head>
	<meta charset="utf-8">
	<title> Shop </title>
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 <link rel="stylesheet" href = "style2.css">
	<!--<link rel="stylesheet" href="shopstylee.css">-->
	<style type="text/css">

    
	h1{
	    
		text-align: center;
		color: #000000;
		
		
		}
		html,
        body{
            margin: 0 auto;
            text-align: center;
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
			font-family: sans-sarif;
			
			
			
			}
		div *{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			
		}
		#links{
		
         
         margin: 0 auto;
         width: 80%;
         justify-content: center;
         margin-top: 20px;
         
         }
    	#yellow, #red, #orange, #blue,#back,#none{
         background:LightSteelBlue;
         text-align: center;
    	border-radius:7%;
    	cursor:pointer;
    	color:white;
    	font-family:serif;
    	font-size:35px;
    	padding:.5% 2%;
    	margin: 1.2%;
    	text-decoration: none;
    	text-shadow:0px -1px 0px #2f6627;
    	margin: 20px;
    	
    	}
    	#back{
    	    margin-top: 40px;
    	}
    	a{
    	    	text-decoration: none;
    	}
    	
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
    
    	
    	h2{
    	        display: inline;
    	    }
    	    
    	    #heading{
    	        font-size: 25px;
    	        padding-top: 20px;
    	        margin: auto;
    	        width: 400px;
    	        font-weight: bold;
    	        
    	    }
    	    
    	    #wrapper{
    	        border: 1px solid;
    	        width: 500px;
    	        margin: auto;
    	       background: rgba(3, 171, 151, 0.3);;
    	        
    	    }
    	    
    	   
    	    
        </style>
        
        <script>
        
         function myFunction() {
        confirm("Do you want to purchase this color?");
        }
        
        </script>
        
        
        
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
       
        
        <h1>Welcome to Chess Shop <?php echo $_SESSION['username']; ?> </h1>
        
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
 

<?php
            isset($_SESSION['username']);
            if ('colour'== 'blue'){
                $sel_query="UPDATE `user` SET `blue` = '1' WHERE username = '$user'";
             $result = mysqli_query($con,$sel_query);
             while($row = mysqli_fetch_assoc($result)) { ?>
             echo $row["blue"];
             <?php $count++; }
            }
             
             
             
  

?>

<?php
       if(isset($_GET['colour'])) // when click on Update button
{
     $sel_query="UPDATE `user` SET `blue` = '1' WHERE username = '$user'";
     
    
}

?>


<?php

    $count=1;
    isset($_SESSION['username']);
    $sql = "UPDATE user SET coin = coin - 50 WHERE username = '$user'";
    $r = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($r)) { ?>
    echo $row["coin"];
    <?php $count++; }
   


 ?>
 
 


 
 
 
 
    <div id= "wrapper">
        <div id= "heading">PURCHASE BACKGROUND COLOR</div>
        <div id="links">
    
      <div id = "blue" class= "options">
      
           <a href="?colour=blue" class= "color" onclick="myFunction()" >Blue ($50)</a>
       </div>
       
     
       
       
    
        <div id = "orange" class= "options">
          <a href="?colour=orange" class= "color" onclick="myFunction()">Orange ($50)</a>
        </div>
    
      <div id = "yellow" class= "options">
       <a href="?colour=yellow" class= "color" onclick="myFunction()">Yellow ($50)</a>
       </div>
       <div id = "red" class= "options">
       <a href="?colour=red" class= "color" onclick="myFunction()">Red ($50)</a>
       </div>
       
       <div id = "none" class= "options">
       <a href="?colour=white">White ($50)</a>
       </div>
        <div id = "back" class= "options">
       <a href="index.php" class= "color">Main Menu</a>
       </div>
        </div>
        
    </div>
        
        
        
        
       
        
        
     
    </body>
</html>
	
	
        
        
