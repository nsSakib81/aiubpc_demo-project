<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<header>
<nav>
    <ul>
    <li><a href="Home.php">Home</a></li>
    </ul>
</nav>
    
<img src="pictures/logo.png" alt="AIUB Photography Club Logo">

</header>
<h1>Sign Up on Aiubpc</h1>
<br>
<br>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($conn,$_POST['fname']); 
    $lastname=mysqli_real_escape_string($conn,$_POST['lname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    $password=mysqli_real_escape_string($conn,$_POST['password1']);
    $confirmpassword=mysqli_real_escape_string($conn,$_POST['conpassword']);


    if(empty($firstname)){
        $error="first name field is required";
    }
    elseif(empty($lastname)){
        $error="last name field is required";
    }
    elseif(empty($email)){
        $error="email field is required";
    }
    
    elseif(empty($password)){
        $error="password field is required";
    }
    elseif($password != $confirmpassword){
        $error="password does not match";
    }

    elseif(strlen($password) <6){
        $error="password must be at least 6 characters!";
    }
    else{
        $check_email="SELECT * FROM registration WHERE email='$email'";
        $data=mysqli_query($conn,$check_email);
        $result=mysqli_fetch_array($data);
        if($result>0)
        {
            $error="email already exist";
        }
        else
        {
            
            $insert ="INSERT INTO registration(first_name,last_name,email,password)
            VALUES('$firstname','$lastname','$email','$password')";

            $q=mysqli_query($conn,$insert);
            if($q)
            {
                ?>
                <script type="text/javascript">
                alert("your account is created successfully");
                window.open("http://localhost/aiubpc/login.php","_self");
                </script>
                <?php
            }
        }
    }
    
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="signup">

        <p>
            <?php
            if(isset($error)){
                echo $error;
            }
            ?>
        </p>
        <p>
            <?php
            if(isset($success)){
                echo $success;
            }
            ?>
        </p>
        <form action="" method="POST">
        <label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php 
        if(isset($error)){echo $firstname;}
        ?>"><br><br>
        <label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php 
        if(isset($error)){echo $lastname;}
        ?>"><br><br>
        <label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php 
        if(isset($error)){echo $email;}
        ?>"><br><br>
        
        <label for="password">Password:</label>
		<input type="password" id="password1" name="password1" value="<?php 
        if(isset($error)){echo $password;}
        ?>"><br><br>
        <label for="conpassword">Confirm Passsword:</label>
		<input type="password" id="conpassword" name="conpassword"><br><br>

        <input type="submit" name="submit" value="Submit">

        </form>
    </div>
</body>
</html>