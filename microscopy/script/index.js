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
		});

		$("#abstract").keyup(function()
		{
			//alert("Working");
		})

		$("#asubmit").click(function()
		{
			var title = $("#title").val();
			var name = $("#name").val();
			var email = $("#email").val();
			var mobile = $("#mobile").val();
			var abstract = $("#abstract").val();
			var awards = $("#awards").val();

			var letters_only_title = /^[a-z]+$/i.test(title);
			var letters_only_name = /^[a-z]+$/i.test(name);
			var numbers_only_mobile = /^[0-9]+$/.test(mobile)
			var whitespace = !title.replace(/\s/g, '').length;

			if(title == "" || name == "" || email == "" || mobile == "" || abstract == "")
			{
				alert("Please complete all the fields.");
			}
			else if(!numbers_only_mobile || mobile.length > 10)
			{
				alert("Mobile Number must contain 10 digit numbers only.")
			}
			else
			{
				var choice = $("#choice").val();

				if(choice == 1)
				{
					if(abstract.split(' ').length < 1 || abstract.split(' ').length > 500)
						alert("Abstract must be upto 500 words.");
				}
				else
				{
					if(abstract.split(' ').length < 1 || abstract.split(' ').length > 2500)
						alert("Full Paper must be upto 2500 words.");
				}

				$.post('back.php',{title:title,name:name,email:email,mobile:mobile,choice:choice,abstract:abstract,awards:awards},function(data)
					{
						if(data == 0)
							alert("Please enter a valid email.");
						else if(data == 1)
							alert("Mobile Number must contain 10 digit numbers only.");
						else if(data == 2)
							alert("Abstract must be upto 500 words.");
						else if(data == 3)
							alert("Full Paper must be upto 2500 words.");
						else if(data == 5)
							alert("Something went wrong. Please try again.");
						else
						{
							alert("Your submission have been recorded.");
							window.location = "/";
						}

					});
			}
		});
	});