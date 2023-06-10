<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aiubpc";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn){
    echo "";
}
else{
    echo "not connected";
}
?>