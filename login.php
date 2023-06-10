<!DOCTYPE html>
<?php include 'connection.php';?>
<html lang="en">
<head>


<title>AIUB Photography Club</title>

<link rel="stylesheet" type="text/css" href="style.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<header>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">
<nav>
    <ul>
    <li><a href="Home.php">Home</a></li>
    </ul>
</nav>
</header>
<body>
    <h1>Login</h1>
    <br>
    <br>
    <form action="" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required=""><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password1" name="password1" required=""><br><br>

    <input type="submit" name="submit" value="Login">
    <br><br>
    <a href="signup.php">Not have an account? sign up here</a>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password1'];
        
        $select="SELECT * FROM registration WHERE email='$email' && password='$password'";
        $query=mysqli_query($conn,$select);
        $row=mysqli_fetch_array($query);
        if($row["usertype"]=="user")
        {
            
            
        ?>
            <script type="text/javascript">
            alert("login successful");
            window.open("http://localhost/aiubpc/User%20home.php","_self");
            </script>
            <?php
        }
        elseif($row["usertype"]=="admin")
        {
            ?>
            <script type="text/javascript">
            alert("login successful");
            window.open("http://localhost/aiubpc/admin%20home.php","_self");
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
            alert("invalid email/password");
            window.open("http://localhost/aiubpc/login.php","_self");
           
            </script>
            <?php
        }
    }
    ?>
</body>
</html>