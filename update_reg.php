<?php
require('db.php');

	$sql1 ="update contest set Available_reg = Available_reg - 1  where c_id = 1";

?>
/*$book = $_POST["Book"];
$block= $_POST["Block"];
$sql= "insert into contest (Available_reg)values ('$book','$block')";
$sql1 ="update stadium set booked = booked + '$book' where Block = '$block'";
$sql2 = "update stadium set available = available - booked where Block = '$block'";
$mysqlresult=mysqli_query($con, $sql);
$mysqlresult1=mysqli_query($con, $sql1);
$mysqlresult2=mysqli_query($con, $sql2);*/
