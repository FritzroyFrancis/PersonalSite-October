<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script>
document.createElement('video');
</script>
<![endif]-->
<title>Games</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!—320—>
<link href="../css/games.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Modernizr.js"></script>
<script type="text/javascript" src="../js/games.js"></script>


<script> 
$(function(){
	if (self == top) // you're not in an iframe
	{
		$("#header").load("../snippets/header.html");   
	}

	else $("#footer").css("display", "none");
	
	$("#text").load("me-and-games.txt");     
})
</script>
</head>

<body>
	<div id="container">
    	<div id="header" class="endPoints">    	               
        </div>
        <div id="content">
        	<video autoplay loop poster="../images/games.jpg" id="bgvid" muted>
				<source src="../games/Cars-webm.webm" type="video/webm">
				<source src="../games/Cars-mp4.mp4" type="video/mp4">
			</video>
            <div id="credit"><p>The game in the background: </p><p> Project CARS</p><p>Fall 2014 - PC, PS4, Xbox One, Wii U</p></div>
	        <div id="text"></div>            
        </div>
        <div id="footer" class="endPoints">Hello! Welcome To My Website! It serves no other purpose than to make me feel like a show-off! Have fun! :)</div>         
    </div>
</body>
</html>
