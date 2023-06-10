<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>photowalk form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="User home.php">Back</a></li>
    </ul>
</nav>
</header>
<body>
    <h1>Photowalk</h1>
	<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" id="id" name="id"><br><br>

		<label for="date">Date:</label>
		<input type="date" id="date" name="date"><br><br>

        <label for="area">Area:</label>
		<input type="text" id="area" name="area"><br><br>

		<input type="submit" name="submit" value="Submit">
        
	</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $date=$_POST['date'];
    $area=$_POST['area'];

$query="INSERT INTO photowalk (name,id,date,area) VALUES('$name','$id','$date','$area')";
$data=mysqli_query($conn,$query);
if($data){
?>
<script type="text/javascript">
    alert("Data saved successfully");
    window.open("http://localhost/aiubpc/User%20home.php","_self");
</script>
<?php


    
}
else{
    ?>
    <script type="text/javascript">
    alert("Please try again");
    </script>
    <?php
}
}

?>
</body>
</html>
