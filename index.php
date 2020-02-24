<?php

include("auth.php");
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Chess Game </title>
	<style type="text/css">
	h1{
		text-align: center;
		color: #0E6144;
		}
		html,
 body{
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
			font-family: sans-sarif;
			background-color:#C69835;
			}
		div *{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		#turn{
			max-width: 442px;
			max-height: 30px;
			width: 100%;
			height: 100%;
			position: relative;
			float: left;
			border: 5px;
			border: 1px solid rgba(0,0,0);
			border-style: insert;
			text-align: center;
			background: #fff;
			transition: .85s linear;
			border-radius:5px;
			left: 59px;
		}
		
		.turnheightlight {
			background: #5cb85c !important;
			color: #fff;
		}
	

	#game{
			max-height: 504px;
			max-width: 504px;
			width: 100%;
			height: 100%;
			position: relative;
			margin: 20px auto;
		}

	.cellprefix{
			width: 100%;
			height: 100%;
			max-height: 50px;
			max-width: 50px;
			float: left;
			margin: 3px;
			padding: 15px 0 0 20px;
		}
	.gamecell{
			border: 1px solid #ffffff;
			width:100%;
			height: 100%;
			max-height: 50px;
			max-width: 50px;
			float: left;
			margin: 3px;
			transition: all 0.5s ease-in-out;
			border-radius: 5px;
			padding: 0 0 0 6px;
			font-size: 30pt;
			cursor: pointer;
			z-index:1;
			background: rgba(255, 255, 255);
		}
	.gamecell:hover{
		background:rgba(255, 0, 0, 0.7);
		z-index: 2;
		transform: translate;
		animation: neonBlueText 1.5s ease-in-out infinite alternate;
	}	
	.grey{
		background: rgba(83,102,219,0.8);
	}
	.green{
		background: rgba(65, 161, 73) !important;
	}
	.neonblue_txt{
	animation: neonBlueText 1.5s ease-in-out infinite alternate;
	}
	
	.neonorange_txt{
	animation: neonOrangeText 1.5s ease-in-out infinite alternate;
	}
	
	.neongreen_txt{
	animation: neonGreenText 1.5s ease-in-out infinite alternate;
	}
@keyframes neonBlueText {
	from{
		text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228dff,
		0 0 70px #228dff, 0 0 80px #228dff, 0 0 100px #228dff, 0 0 150px #228dff;
		}
	to{
		text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228dff,
		0 0 35px #228dff, 0 0 40px #228dff, 0 0 50px #228dff, 0 0 75px #228dff;
	}
}	



@keyframes neonOrangeText {
	from{
		text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228dff,
		0 0 70px #228dff, 0 0 80px #228dff, 0 0 100px #228dff, 0 0 150px #228dff;
    }
	to{
		text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228dff,
		0 0 35px #228dff, 0 0 40px #228dff, 0 0 50px #228dff, 0 0 75px #228dff;
	}
}


@keyframes neonGreenText {
from{
		text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228dff,
		0 0 70px #228dff, 0 0 80px #228dff, 0 0 100px #228dff, 0 0 150px #228dff;
		}
	to{
		text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228dff,
		0 0 35px #228dff, 0 0 40px #228dff, 0 0 50px #228dff, 0 0 75px #228dff;
	}
}
.shake-little{
		display: inline-block;
		transform-origin: center center;
}
.shake-freeze,
.shake-constant.shake-constant-hover:hover,
.shake-trigger:hover .shake-constant.shake-constant--hover {
		animation-play-state: running;
}
.shake-freeze:hover,
.shake-trigger:hover .shake-freez, .shake-little:hover,
.shake-trigger:hover .shake-little {
		animation-play-state: running;
}


@keyframes shake-little{
	2%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	4%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	6%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	8%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	10%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	12%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	14%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	16%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	18%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	20%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	22%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	24%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	26%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	28%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	30%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	32%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	34%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	36%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	38%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	40%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	42%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	44%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	46%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	48%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	50%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	52%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	54%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	56%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	58%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	60%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	62%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	64%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	66%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	68%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	70%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	72%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	74%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	76%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	78%{
		transform: translate(0px, 0px) rotate(0.5deg);
	}
	80%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	82%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	84%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	86%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	88%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	90%{
		transform: translate(0px, 1px) rotate(0.5deg);
	}
	92%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	94%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	96%{
		transform: translate(1px, 0px) rotate(0.5deg);
	}
	98%{
		transform: translate(1px, 1px) rotate(0.5deg);
	}
	0%, 100%{
		transform: translate(0, 0) rotate(0);
	}	
}

.shake-little:hover,
.shake-trigger:hover .shake-little, .shake-little.shake-freeze, .shake-little
	 .shake-constant {
		animation-name: shake-little;
		animation-duration: 100ms;
		animation-timing-function: ease-in-out;
		animation-iteration-count: infinite;
	}
	</style>
</head>
<body>
<h1> Welcome to Chess Academey </h1>
<div id="game">
    
<div class='cellprefix'>8</div>
<div class='gamecell' id='1_8'></div>
<div class='gamecell grey' id='2_8'></div>
<div class='gamecell' id='3_8'></div>
<div class='gamecell grey' id='4_8'></div>
<div class='gamecell' id='5_8'></div>
<div class='gamecell grey' id='6_8'></div>
<div class='gamecell' id='7_8'></div>
<div class='gamecell grey' id='8_8'></div>

<div class='cellprefix'> 7 </div>
<div class='gamecell grey' id='1_7'></div>
<div class='gamecell' id='2_7'></div>
<div class='gamecell grey' id='3_7'></div>
<div class='gamecell' id='4_7'></div>
<div class='gamecell grey' id='5_7'></div>
<div class='gamecell' id='6_7'></div>
<div class='gamecell grey' id='7_7'></div>
<div class='gamecell' id='8_7'></div>

<div class='cellprefix'> 6 </div>
<div class='gamecell' id='1_6'></div>
<div class='gamecell grey' id='2_6'></div>
<div class='gamecell' id='3_6'></div>
<div class='gamecell grey' id='4_6'></div>
<div class='gamecell' id='5_6'></div>
<div class='gamecell grey' id='6_6'></div>
<div class='gamecell' id='7_6'></div>
<div class='gamecell grey' id='8_6'></div>

<div class='cellprefix'> 5 </div>
<div class='gamecell grey' id='1_5'></div>
<div class='gamecell' id='2_5'></div>
<div class='gamecell grey' id='3_5'></div>
<div class='gamecell' id='4_5'></div>
<div class='gamecell grey' id='5_5'></div>
<div class='gamecell' id='6_5'></div>
<div class='gamecell grey' id='7_5'></div>
<div class='gamecell' id='8_5'></div>

<div class='cellprefix'> 4 </div>
<div class='gamecell' id='1_4'></div>
<div class='gamecell grey' id='2_4'></div>
<div class='gamecell' id='3_4'></div>
<div class='gamecell grey' id='4_4'></div>
<div class='gamecell' id='5_4'></div>
<div class='gamecell grey' id='6_4'></div>
<div class='gamecell' id='7_4'></div>
<div class='gamecell grey' id='8_4'></div>

<div class='cellprefix'> 3 </div>
<div class='gamecell grey' id='1_3'></div>
<div class='gamecell' id='2_3'></div>
<div class='gamecell grey' id='3_3'></div>
<div class='gamecell' id='4_3'></div>
<div class='gamecell grey' id='5_3'></div>
<div class='gamecell' id='6_3'></div>
<div class='gamecell grey' id='7_3'></div>
<div class='gamecell' id='8_3'></div>

<div class='cellprefix'> 2 </div>
<div class='gamecell' id='1_2'></div>
<div class='gamecell grey' id='2_2'></div>
<div class='gamecell' id='3_2'></div>
<div class='gamecell grey' id='4_2'></div>
<div class='gamecell' id='5_2'></div>
<div class='gamecell grey' id='6_2'></div>
<div class='gamecell' id='7_2'></div>
<div class='gamecell grey' id='8_2'></div>

<div class='cellprefix'> 1 </div>
<div class='gamecell grey' id='1_1'></div>
<div class='gamecell' id='2_1'></div>
<div class='gamecell grey' id='3_1'></div>
<div class='gamecell' id='4_1'></div>
<div class='gamecell grey' id='5_1'></div>
<div class='gamecell' id='6_1'></div>
<div class='gamecell grey' id='7_1'></div>
<div class='gamecell' id='8_1'></div>

<div class='cellprefix'></div>
<div class='cellprefix'>a</div>
<div class='cellprefix'>b</div>
<div class='cellprefix'>c</div>
<div class='cellprefix'>d</div>
<div class='cellprefix'>e</div>
<div class='cellprefix'>f</div>
<div class='cellprefix'>g</div>
<div class='cellprefix'>h</div>
<div id='turn'> It's Whites Turn!</div>
</div>

</body>
</html>
