<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM join_team WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
?>
<script type="text/javascript">
    alert("Data deleted successfully");
    window.open("http://localhost/aiubpc/join%20team%20view.php","_self");
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