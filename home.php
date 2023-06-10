<!DOCTYPE html>
<html>
<head>
	<title>AIUB Photography Club</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
	<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
		
		<h1>AIUB Photography Club</h1>
		
		<nav>
			<ul>
				
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="login.php">Log In</a></li>
				
			</ul>
		</nav>
	</header>

	<main>
		<section class="intro">
			<h2>Welcome to AIUB Photography Club</h2>
			<p>We are a group of photography enthusiasts who love to capture moments and create memories. Join us to learn, share, and grow your photography skills.</p>
			<a href="signup.php" class="btn">Join Us</a>
		</section>

	

		<section class="gallery">
			<h2>Gallery</h2>
			<div class="images">
				<img src="pictures/aiub1.jpg">
				<img src="pictures/aiub2.jpg">
				<img src="pictures/aiub3.jpg">
				<img src="pictures/aiub4.jpg">
				<img src="pictures/aiub5.jpg">
				<img src="pictures/aiub7.jpg">
			</div>
		</section>

		
	</main>

	<?php include 'footer.php';?>
</body>
</html>
