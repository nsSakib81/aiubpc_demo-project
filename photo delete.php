<?php
include 'connection.php';
$id=$_GET['id'];
$delete="DELETE FROM photomonth WHERE id='$id'";
$delete_q=mysqli_query($conn,$delete);
if($delete_q){
    ?>
    <script type="text/javascript">
        alert("Data deleted successfully");
        window.open("http://localhost/aiubpc/viewpic.php","_self");
    </script>    
    <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("please try again!!");
        </script>
        <?php
    }

?>