<?php

	date_default_timezone_set("Asia/Kolkata");
	require_once('conn.php');

	function checkString($st)
	{
		if(strlen($st) < 1 || ctype_space($st) == 1)
			return true;
		else
			return false;
	}

	function emailCheck($email)
	{
		$con = mysqli_connect('localhost','root','','visagr3_cnf');
		$q = "SELECT count(*) FROM abstract WHERE email='$email'";
		$qq = mysqli_query($con,$q) or die(mysqli_error($con));
		$n = mysqli_fetch_row($qq) or die(mysqli_error($con));
		if($n[0] > 0)
			return true;
		else 
			return false;
	}

	function mobileCheck($mobile)
	{
		$con = mysqli_connect('localhost','root','','visagr3_cnf');
		$q = "SELECT count(*) FROM abstract WHERE mobile='$mobile'";
		$qq = mysqli_query($con,$q) or die(mysqli_error($con));
		$n = mysqli_fetch_row($qq) or die(mysqli_error($con));
		if($n[0] > 0)
			return true;
		else 
			return false;
	}

	if(isset($_POST['title']))
	{
		$title = $_POST['title'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$choice = $_POST['choice'];
		$abstract = $_POST['abstract'];
		$awards = $_POST['awards'];



		if(checkString($title))
		{
			header('Location:abstract.php?m='.sha1(0));
		}
		else if(checkString($name))
		{
			header('Location:abstract.php?m='.sha1(2));
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header('Location:abstract.php?m='.sha1(3));
		}
		else if(emailCheck($email))
		{
			header('Location:abstract.php?m='.sha1(6));
		}
		else if(!is_numeric($mobile) || strlen($mobile) > 10 || strlen($mobile) < 10)
		{
			header('Location:abstract.php?m='.sha1(4));
		}
		else if(mobileCheck($mobile))
		{
			header('Location:abstract.php?m='.sha1(7));
		}
		else if(checkString($abstract))
		{
			header('Location:abstract.php?m='.sha1(5));
		}
		else
		{
			$time = time();
			$q = "INSERT INTO abstract VALUES('','$name','$email','$mobile','$choice','$title','$abstract','$awards','$time')";

			$query = mysqli_query($con,$q) or die(mysqli_error($con));

			if($query)
			{
				header('Location:abstract.php?m='.sha1(1));
			}
			else
				header('Location:abstract.php?m='.sha1(404));
		}

	}
	else
	{
		header('Location:/microscopy');
	}

?>