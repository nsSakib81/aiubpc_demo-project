<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM photowalk WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>

<link rel="stylesheet" type="text/css" href="style.css">
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="photowalk view.php">Back</a></li>
    </ul>
</nav>
</header>
<h1>Photo walk Update</h1><br><br>
<form action="" method="POST">
		<label for="name">Name:</label>
		<input type="text" value="<?php echo $row['name']  ?>" id="sname" name="sname"><br><br>

		<label for="id">ID:</label>
		<input type="text" value="<?php echo $row['id'] ?>" id="id" name="id"><br><br>

        <label for="team">Date:</label>
		<input type="date" value="<?php echo $row['date'] ?>" id="date" name="date"><br><br>

        <label for="post">area:</label>
		<input type="text" value="<?php echo $row['area'] ?>" id="area" name="area"><br><br>

		
		<input type="submit" name="update" value="update information">
        
	</form>

<?php
if(isset($_POST['update'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $date=$_POST['date'];
    $area=$_POST['area']; 

$update="UPDATE photowalk SET name='$name',
id='$id',
date='$date',
area='$area' WHERE id='$id'";
$data=mysqli_query($conn,$update);
if($data){
?>
<script type="text/javascript">
    alert("Data Updated successfully");
    window.open("http://localhost/aiubpc/photowalk%20view.php","_self");
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