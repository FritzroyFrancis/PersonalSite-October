<!DOCTYPE html> 
<html class="no js">
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script>
document.createElement('video');
</script>
<![endif]-->
<title>Music</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!—320—>
<link href="../css/music.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/music.js"></script>

<script> 
$(function(){
	if (self == top) // you're not in an iframe
	{
		$("#header").load("../snippets/header.html");   
	}

	else $("#footer").css("display", "none");
	
	$("#description").load("me-and-music.txt");     
})
</script> 
</head>

<body>
	<div id="container">
    	<div id="header" class="endPoints"></div>
        <div id="content">
            <div id="previews">
            	<p><a id="song1"></a></p>
            	<p><a id="song2"></a></p>
                <p><a id="song3"></a></p>
                <p><a id="song4"></a></p>
                <p><a id="song5"></a></p>                
                <p><a id="song6"></a></p>                 
            </div>
   	        <div id="text">
            	<div id="floater"></div>
            	<div id="description"></div>
            </div>
            <audio id="player" src="" type="audio/mpeg" controls>				
			</audio>
        </div>
        <div id="footer" class="endPoints">Hello! Welcome To My Website! It serves no other purpose than to make me feel like a show-off! Have fun! :)</div>         
    </div>
</body>
</html>
