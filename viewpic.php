<?php
include 'connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">


<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="photo of the month.php">Back</a></li>
    </ul>
</nav>
</header>

<br><br>
<h1>photo of the month views</h1>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Phone</th>
        <th>Photo</th>
        <th colspan="2">Action</th>
    </tr>
<?php
$select="SELECT * FROM photomonth";
$select_q=mysqli_query($conn,$select);
$data=mysqli_num_rows($select_q);
if($data){
    while($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><img src="images/<?php echo $row['photo'];?>" width="200px"></td>
                        <td><a href="pic update.php?id=<?php echo $row['id']; ?>">Update</a></td>

                        <td><a onclick="return confirm('delete???')" href="photo delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                        
                    </tr>
        <?php

    }
}
else{
    ?>
            <tr>
                <td>No record found</td>
            </tr>
            <?php

}
?>
