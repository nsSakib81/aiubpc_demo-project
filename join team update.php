<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM join_team WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="join team view.php">Back</a></li>
    </ul>
</nav>
</header>
<h1>Join team Update</h1><br><br>
<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" value="<?php echo $row['name']  ?>" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" value="<?php echo $row['id'] ?>" id="id" name="id"><br><br>

        <label for="team">Team:</label>
		<input type="text" value="<?php echo $row['team'] ?>" id="team" name="team"><br><br>

        <label for="post">Skill:</label>
		<input type="text" value="<?php echo $row['skill'] ?>" id="skill" name="skill"><br><br>

		
		<input type="submit" name="update" value="update information">
        
	</form>

<?php
if(isset($_POST['update'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $team=$_POST['team'];
    $skill=$_POST['skill']; 

$update="UPDATE join_team SET name='$name',
id='$id',
team='$team',
skill='$skill' WHERE id='$id'";
$data=mysqli_query($conn,$update);
if($data){
?>
<script type="text/javascript">
    alert("Data Updated successfully");
    window.open("http://localhost/aiubpc/join%20team%20view.php","_self");
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