// JavaScript Document

$(document).ready(function()
{
	var number2 = 0;
	$("#container").css("height", Math.max($(document).height(), $(window).height()));	
	
	$(window).resize(function()
	{
		$("#container").css("height", Math.max($(document).height(), $(window).height()));		
	});
	
	$("li#categories").css("display", "none");
	
	$(".site-section").mouseover(function() 				
	{
        $(".site-section").not(this).addClass("blur");
    });
	
	$(".site-section").mouseout(function() {
        $(".site-section").not(this).removeClass("blur");
    });
	
	$.getJSON("js/homepageinfo.json", function(data)
	{		
		$(".site-section").each(function(index)
		{			
			$(".site-section:nth-child(" + (index + 1) + ") a .tileTitle").html(data[index].section);
			$(".site-section:nth-child(" + (index + 1) + ") a .tileDescription").html(data[index].description);													
        });
				
	}).fail(function(jqxhr, textStatus, error)
	{
		var err = textStatus + ', ' + error;
		alert(err);
    });
	
	
	$(".site-section a").click(function(e)
	{
		if($(window).width() > 780)
		{
			number2 = 15 + (17.5 * $(this).parent().index());
			if($("#container").width() < 1042)
			{	
				var frameWidth = "96%";	
			}
			
			else var frameWidth = "1000px";
			
			$(this).attr("target", "linkframe");
			$("#new-page, #cancel").css("display", "block");
			$("#new-page").animate({opacity: 1}, 500); //frame comes in

			$("#cancel").animate({opacity: 1}, 500);
		}		
	});	
	
	$("#cancel").click(function()
	{
		$("#new-page").animate({opacity: 0}, 500);
		$("#cancel").animate({opacity: 0}, 500);
		
		setTimeout(function()
		{
			$("#new-page").css("display", "none");
			$("#new-page iframe").attr("src", "");		
		}, 500);	
	});
	
});
