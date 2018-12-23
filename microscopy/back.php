<?php

	date_default_timezone_set("Asia/Kolkata");
	require_once('conn.php');

	if(isset($_POST['title']))
	{
		$title = $_POST['title'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$choice = $_POST['choice'];
		$abstract = $_POST['abstract'];
		$awards = $_POST['awards'];

		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo 0;
		}
		else if(!is_numeric($mobile))
		{
			echo 1;
		}
		else if($choice == 1 && strlen($abstract) > 500)
		{
			echo 2;
		}
		else if($choice == 2 && strlen($abstract) > 2500)
		{
			echo 3;
		}
		else
		{
			$time = time();
			$q = "INSERT INTO abstract VALUES('','$name','$email','$mobile','$choice','$title','$abstract','$awards','$time')";

			$query = mysqli_query($con,$q) or die(mysqli_error($con));

			if($query)
				echo 4;
			else
				echo 5;
		}

	}
	else
	{
		header('Location:/microscopy');
	}

?>