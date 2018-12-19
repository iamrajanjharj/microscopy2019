$(document).ready(function()
	{
		$("#menu").click(function()
			{
				$("#cover").fadeIn();
				$("#menu_container").fadeIn();				
			});

		$("#cover").click(function()
		{	
			$("#cover").fadeOut();
			$("#menu_container").fadeOut();
		});
	});