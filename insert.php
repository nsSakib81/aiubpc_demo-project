<?php
include 'connection.php';
if(isset($_POST['submitpic'])){
    $name=$_POST['sname'];
    $id=$_POST['id'];
    $phone=$_POST['phone'];
    $photo=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $destination="images/".$photo;
    move_uploaded_file($tmp_name, $destination);

    $insert="INSERT INTO photomonth (name,id,phone,photo)
    VALUES('$name','$id','$phone','$photo')";
    $insert_q=mysqli_query($conn,$insert);
    if($insert_q){
        ?>
        <script type="text/javascript">
        alert("Data saved successfully");

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

