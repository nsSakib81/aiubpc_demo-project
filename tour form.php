<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tour form</title>
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
    <h1>Tour Form</h1>
    <br>
    <br>
    
	<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" id="id" name="id"><br><br>

		<label for="device">Device:</label>
		<input type="text" id="device" name="device"><br><br>

        <label for="post">Post:</label>
		<input type="text" id="post" name="post"><br><br>

		<input type="submit" name="submit" value="Submit">

        
	</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $device=$_POST['device'];
    $post=$_POST['post'];

$query="INSERT INTO tour (name,id,device,post) VALUES('$name','$id','$device','$post')";
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
