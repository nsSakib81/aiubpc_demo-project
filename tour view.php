<?php
include 'connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="admin home.php">Back</a></li>
    </ul>
</nav>
</header>

<h1>Tour view table</h1>

<br><br>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Device</th>
        <th>post</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
        $query="SELECT * FROM tour";
        $data=mysqli_query($conn,$query);
        $result=mysqli_num_rows($data);
        if($result){
            while($row=mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['device'];?></td>
                        <td><?php echo $row['post'];?></td>
                        <td><a href="tour update.php?id=<?php echo $row['id']; ?>">Update</a></td>

                        <td><a onclick="return confirm('delete???')" href="tour delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                        
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
</table>