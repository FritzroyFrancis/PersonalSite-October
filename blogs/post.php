<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <script>
    document.createElement('video');
    </script>
    <![endif]-->
    <title>Blog</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!—320—>
    <link href="../css/blog-page.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script> 
    $(function()
    {
        if (self == top) // you're not in an iframe
        {
            $("#header").load("../snippets/header.html");   
        }
    
        else $("#footer").css("display", "none");     
    })
    </script>
</head>

<body>
	<div id="container">
    	<div id="header" class="endPoints"></div>
        <div id="content">        	
            <div id="credit">
            	<ul>
					<?php
						echo $_POST['posttitle'];
					?>
                </ul>
            </div>
	        <div id="text">
            	<div id="text-content" style="text-align: center; position: relative; top: 20px">
				<?php
					$title = $_POST['posttitle'];
					$link = mysql_connect('mymanflycom.fatcowmysql.com', 'mymanfly', 'Fly_1990'); 
					if (!$link)
					{ 
					  	die('Could not connect'); 
					}						
				
					mysql_select_db("mymanfly_posts");	
					$query = mysql_query("SELECT * FROM posts WHERE Title='" . $title . "'",$link);
		
					while($row = mysql_fetch_array($query))
					{
						echo $row['url'];
					}	
				?>
                </div>
            </div>
        </div>
    	<div id="footer" class="endPoints">Hello! Welcome To My Website! It serves no other purpose than to make me feel like a show-off! Have fun! :)</div>         
    </div>
</body>
</html>