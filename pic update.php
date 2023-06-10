<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM photomonth WHERE id='$id'";
$select_q=mysqli_query($conn,$select);
$row=mysqli_fetch_array($select_q);
?>

<link rel="stylesheet" type="text/css" href="style.css">

<h1>Update picture</h1>

<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="viewpic.php">Back</a></li>
    </ul>
</nav>
</header>
<br>
<br>
<form action="" method="POST" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="sname" name="sname" placeholder="sname" value="<?php echo $row['name']  ?>"><br><br>

		<label for="id">ID:</label>
		<input type="text" id="id" name="id" placeholder="id" value="<?php echo $row['id']  ?>"><br><br>

		<label for="phone">phone</label>
		<input type="text" id="phone" name="phone" placeholder="phone" value="<?php echo $row['phone']  ?>"><br><br>

        <label for="photo">Photo:</label>
		<input type="file" id="photo" name="photo"> <br><br><br> <img src="images/<?php echo $row['photo']  ?>" width="200px"><br><br>

		<input type="submit" name="updatepic" value="Update">
        
	</form>

<?php
if(isset($_POST['updatepic'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $phone=$_POST['phone'];
    $photo=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $destination="images/".$photo;
    if($photo!=""){

        move_uploaded_file($tmp_name, $destination);
        $update="UPDATE photomonth SET name='$name',
        id='$id',
        phone='$phone',
        photo='$photo' WHERE id='$id'";

        $update_q=mysqli_query($conn,$update);


        header('location:viewpic.php');
    }
    else{
        $update="UPDATE photomonth SET name='$name',
        id='$id',
        phone='$phone'
        WHERE id='$id'";

        $update_q=mysqli_query($conn,$update);


        header('location:viewpic.php');
    }




}

?>