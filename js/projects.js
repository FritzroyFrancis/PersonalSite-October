$(document).ready(function()
{	
	$("#container").css("height", Math.max($(document).height(), $(window).height()));	
	
	$(window).resize(function()
	{
		$("#container").css("height", Math.max($(document).height(), $(window).height()));		
	});

	$.getJSON("../js/projectsinfo.json", function(data)
	{	
		$("#credit ul li").each(function(index)
		{			
			$("#credit ul li:nth-child(" + (index + 1) + ") span").html(data[index].project);												
        });
				
	}).fail(function(jqxhr, textStatus, error)
	{
		var err = textStatus + ', ' + error;
		alert(err);
    });
	
	$("#credit ul li").click(function()
	{
		var value = $(this).index();			
		$("body").css("background-image", "url(images/projects_" + (value + 1) + ".jpg)");	
		
		$.getJSON("../js/projectsinfo.json", function(data)
		{	
			$("#text").html(data[value].description);																	
		})
		
		.fail(function(jqxhr, textStatus, error)
		{
			var err = textStatus + ', ' + error;
			alert(err);
		});							
	});	
});
