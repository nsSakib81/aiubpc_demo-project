<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM tour WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="tour view.php">Back</a></li>
    </ul>
</nav>
</header>
<h1>
    Tour update
</h1>
<br>
<br>
<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" value="<?php echo $row['name']  ?>" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" value="<?php echo $row['id'] ?>" id="id" name="id"><br><br>

        <label for="device">Device:</label>
		<input type="text" value="<?php echo $row['device'] ?>" id="device" name="device"><br><br>

        <label for="post">Post:</label>
		<input type="text" value="<?php echo $row['post'] ?>" id="post" name="post"><br><br>

		
		<input type="submit" name="update" value="update">
        <button><a href="tour view.php">Back</a></button>
	</form>

<?php
if(isset($_POST['update'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $device=$_POST['device'];
    $post=$_POST['post'];

$update="UPDATE tour SET name='$name',
id='$id',
device='$device',
post='$post' WHERE id='$id'";
$data=mysqli_query($conn,$update);
if($data){
?>
<script type="text/javascript">
    alert("Data Updated successfully");
    window.open("http://localhost/aiubpc/tour%20view.php","_self");
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