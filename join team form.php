<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>join team form</title>
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
    <h1>join team Form</h1>
	<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" id="id" name="id"><br><br>

		<label for="team">Interested team:</label>
		<input type="text" id="team" name="team"><br><br>

        <label for="skill">Skill:</label>
		<input type="text" id="skill" name="skill"><br><br>

		<input type="submit" name="submit" value="Send Request">
        
	</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $team=$_POST['team'];
    $skill=$_POST['skill'];

$query="INSERT INTO join_team (name,id,team,skill) VALUES('$name','$id','$team','$skill')";
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
