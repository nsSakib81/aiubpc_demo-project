<?php
include 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>photo of the month</title>
</head>
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="User home.php">Back</a></li>
    <li><a href="viewpic.php">view</a></li>
    </ul>
</nav>
</header>

<body>
<h1>Submit photo for photo of the month:</h1>
<br>
<br>
	<form action="" method="POST" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" id="id" name="id"><br><br>

		<label for="phone">phone</label>
		<input type="text" id="phone" name="phone"><br><br>

        <label for="photo">Photo:</label>
		<input type="file" id="photo" name="photo"><br><br>

		<input type="submit" name="submitpic" value="Submit">
        
	</form>

  <nav name="view">
    <ul>
  <a href="viewpic.php">view</a>
  </ul>
  </nav>

</body>
</html>