<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	  <meta name="description" content="Microscopy 2019 Event on Microscopy and Foldscope">
	  <meta name="keywords" content="microscopy2019,microscopy,foldscope,microscopy conference,National,mnnit,mnnit Allahabad,Biotechnology,Event">
	  <meta name="author" content="Rajan Jha">
	<title> Abstract | Microscopy 2019</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/index.css">
	
	<style type="text/css">
	
		#abstractForm
		{
			border: 1px solid #000;
			box-shadow: 2px 2px 2px 0.2px grey;
			padding: 35px;
			color: #FFF;
			width: 40%;
		}

		#abstractForm > form
		{
			color: #333;
			text-align: left;
		}

		#abstractForm > h2
		{

			font-family: 'Francois One', sans-serif;
			font-weight: normal;
			background: #333;
			width: auto;
			text-align: center;
			position: relative;
			top: 0;
			left: 0;
		}

		#abstractForm > form > label
		{

		}

		input[type=text],input[type=email],input[type=number],textarea,select
		{
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
		}

		textarea
		{
			height: 200px;
			resize: none;
		}

		input[type=submit]
		{
			width: 100%;
			padding: 14px 20px;
			background: #bf1918;
			color: #FFF;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover
		{
			background: #a81615;
		}

		@media screen and (max-width: 650px)
		{
			#abstractForm
			{
				width: 84%;
			}
		}
	
	</style>

	<script type="text/javascript" src="script/jquery.js"></script>
	<script type="text/javascript" src="script/index.js"></script>

</head>
<body>

	<div id="cover"></div>

	<div id="container">
		<div id="header">
			<img src="img/logo.png" id="logo" height="120" />
		
			<CENTER>

				<h4 id="title1"><i>National Conference on</i></h4>
				<h2 id="title2">Advances in Microscopy and Foldscope</h2>
				<h5 id="title3">(Under the DBT Foldscope initiative)</h5>
				<h4 id="title4">15th &hyphen; 16th March, 2019</h4>

			</CENTER>

		<!--	<div id="menu" title="Menu">

				<div class="menu_line"></div>
				<div class="menu_line"></div>
				<div class="menu_line"></div>
			
		    </div> -->



			
		</div>

		<br>

		<div id="navBar">
					<ul class="topnav">
					  <li><a href="/">Home</a></li>
					  <li><a href="about.html">About</a></li>
					  <li><a href="abstract.php" class="active">Submit an Abstract</a></li>
					  <li><a href="registration.html">Registration</a></li>
					  <li><a href="awards.html">Awards/Grants</a></li>
					  <li><a href="contact.html">Contact</a></li>
					</ul>
		</div>
		<div id="textscroll" style="padding-top: 5px;padding-bottom: 10px;">
			<marquee onmouseover="this.stop();" onmouseout="this.start();">
				<b style="color: red;"><span>Best paper presentation award </span>| <span>Best microscopy picture award </span>| <span>Best Foldscope microscopy award </span>| <span>Best Foldscope microscopy award</span></marquee></b>
		</div>

		<center>

			<div id="abstractForm">

				<h2>Abstract Submission</h2>
				<span id="msg" style="color: red;">
					<?php
						if(isset($_GET['m']))
						{
							$m = $_GET['m'];

							switch ($m) {
								case sha1(0):
									echo 'Abstract/Fullpaper must have a title';
									break;
								case sha1(2):
									echo 'Please enter your name';
									break;
								case sha1(3):
									echo 'Please enter a valid email';
									break;
								case sha1(4):
									echo 'Mobile number must contain 10 digit numbers.';
									break;
								case sha1(5):
									echo 'Abstract/Fullpaper field cannot be empty';
									break;
								case sha1(6):
									echo 'Email Address already exists';
									break;
								case sha1(7):
									echo 'Mobile Number already exists';
									break;
								case sha1(1):
									echo 'Your submission have been recorded. Redirecting...';
									header('refresh:4;url=/microscopy');
								case sha1(404):
									echo 'Something Went Wrong.Please Try Again';
									break;
								default:
									echo '';
									break;
							}
						}
					?>
				</span>
			
			<form method="POST" action="back.php">
				
				<label>Title <sup style="color: red;">*</sup></label>
				<input type="text" name="title" id="title" placeholder="Abstract title Here...">

				<label>Name <sup style="color: red;">*</sup></label>
				<input type="text" name="name" id="name" placeholder="Your name Here...">

				<label>Email <sup style="color: red;">*</sup></label>
				<input type="email" name="email" id="email" placeholder="Your email Here...">

				<label>Mobile Number <sup style="color: red;">*</sup></label>
				<input type="number" name="mobile" id="mobile" placeholder="Your mobile number Here...">

				<center>
				<span style="text-align: center;">
					<input type="radio" name="choice" id="choice" value="1" checked><label>Abstract</label>
					<input type="radio" name="choice" id="choice" value="2"><label>Full Paper</label>
					<sup style="color: red;">*</sup>
				</span>
				</center>
				<br>

				<label>Abstract / Full-paper <sup style="color: red;">*</sup></label><br>
				<span style="font-size: 80%;color: grey;">
				( Abstract must be upto 500 words. Full Paper must be upto  2500 words.)
			</span>
				<textarea id="abstract" name="abstract" placeholder="Abstract/Full Paper here..."></textarea>

				<label>Awards</label><br>
				<span style="font-size: 80%;color: grey;">
				( Apply for the awards. )
				</span>
				<select id="awards" name="awards">
					<option value="0">Select an Award</option>
					<option value="1">Young scientist awards<option>
					<option value="2">Best paper presentation award<option>
					<option value="3">Best microscopy picture award<option>
					<option value="4">Best Foldscope microscopy award<option>
				</select>

				<input type="submit" name="asubmit" id="asubmit" value="Submit">

			</form>

			</div>
		</center>

		<div id="footer" name="footer">
			Dr. Vishnu Agarwal | 
			Convener & Organizing Secretary 
			| Department of Biotechnology <br>
			Motilal Nehru National Institute of Technology Allahabad | 
			Prayagraj-211004 (India) | 
			Phone:91-5322271235; Fax:91-5322545341 | 
			Mobile:+919235682651, +916392651837 | 
			Email:vishnua@mnnit.ac.in<br>
			<b>Created by: </b>Rajan Jha
		  	<a href="https://www.github.com/iamrajanjharj" target="_blank">Github</a> | <a href="https://www.facebook.com/urbanbrahmin" target="_blank">Facebook</a> | <a href="mailto:jharajan20@gmail.com" target="_blank">Email</a>
		</div>

</div>

<br><br>

</body>
</html>