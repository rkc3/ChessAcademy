<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Shop </title>
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
		float: center
         height: 300px;
         margin 0 auto;
         width: 30%;
         justify-content: center;
         }
    	#yellow, #red, #orange, #blue,#back{
         background:white;
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
    	<!--<button id="red-btn">Red</button>-->
    	<!--<button id="blue-btn">Blue</button>-->
    	<!--<button id="orange-btn">Orange</button>-->
    	<!--<button id="yellow-btn">Yellow</button>-->
        <script src="changethemee.js"></script>
        
        <h1> Shop </h1>
        <div id="links">
    
      <div id = "blue">
       <a href="?colour=blue">Blue</a>
       </div>
    
        <div id = "orange">
          <a href="?colour=orange">Orange</a>
        </div>
    
      <div id = "yellow">
       <a href="?colour=yellow">Yellow</a>
       </div>
       <div id = "red">
       <a href="?colour=red">Red</a>
       </div>
        <div id = "back">
       <a href="index.php">Go Back</a>
       </div>
        </div>
        
    </body>
</html>
	
	
        
        