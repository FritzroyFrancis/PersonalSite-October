<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <script>
    document.createElement('video');
    </script>
    <![endif]-->
    <title>Projects</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!—320—>
    <link href="../css/projects.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/projects.js"></script>
    
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
    	<div id="header" class="endPoints"></div>
        <div id="content">
	        <div id="text">I suppose this is the section where I show off a very casual resume. However, since I'm very tough on myself when it comes to the little experience I have, I might as well just show you the entire thing. A .doc file is right here for you.</div>
            <div id="credit">
            	<ul>
                	<li><span>One</span></li>
                	<li><span>Two</span></li>
                    <li><span>Three</span></li>
                </ul>
            </div>
        </div>
        <div id="footer" class="endPoints">Hello! Welcome To My Website! It serves no other purpose than to make me feel like a show-off! Have fun! :)</div>         
    </div>
</body>
</html>
