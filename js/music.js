// JavaScript Document

$(document).ready(function()
{
	$("#container").css("height", Math.max($(document).height(), $(window).height()));
		
	$(window).resize(function()
	{
		$("#container").css("height", Math.max($(document).height(), $(window).height()));	
		$("#text").css("height", $("#text").css("width"));	
	});
	
	var player = document.getElementById("player");
	player.volume=0.5;
	$.getJSON("../js/songinfo.json", function(data)
	{		
		$("#previews p").each(function(index)
		{			
			$("#previews p:nth-child(" + (index + 1) + ") a").html(data[index].title);										
        });
				
	}).fail(function(jqxhr, textStatus, error)
	{
		var err = textStatus + ', ' + error;
		alert(err);
    });
	
	$("#previews p a").click(function()
	{	
		var which = $(this).parent().index();
		$.getJSON("../js/songinfo.json", function(data)
		{
			$("#text").css("background-image", "url(../music/images/" + data[which].image + ")");
			$("#description").html(data[which].description);
			var links = "../music/songs/" + data[which].url;
			$("audio").attr("src",links);
			player.play();					
		
		}).fail(function(jqxhr, textStatus, error)
		{
			var err = textStatus + ', ' + error;
			alert(err);
		});
		

	});		
});