<?php
require('db.php');

$nam=$_POST["name"];
$age=$_POST["age"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$unam=$_POST["Username"];
$pass=$_POST["Password"];

$sql="insert into user (name,age,mob,email,Username,Password)values ('$nam','$age','$mob','$email','$unam','$pass')";
$mysqlresult=mysqli_query($con, $sql);
header("Location: login_user.php");
?>




