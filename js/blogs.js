// JavaScript Document
$(document).ready(function()
{	
	$("#container").css("height", Math.max($(document).height(), $(window).height()));	
	
	$(window).resize(function()
	{
		$("#container").css("height", Math.max($(document).height(), $(window).height()));		
	});
	
	$("#credit ul li a").click(function()
	{
		$("#text").animate({opacity: 0}, 1000);
		var title = $(this).text();
		var currentBlog = title;				
		setTimeout(function()
		{
			$.post('../php/geturl.php',{posttitle:title}, function(data)
			{
				var link = data;
				$("#text").load(link);
			});			
		}, 1000);
		/*$("#thumbsdown").css("display", "block");	
		$("#thumbsup").css("display", "block");
		voted = false;
		opened = true;*/			
		$("#text").animate({opacity: 1}, 1000);
	});
});