<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body style="background:url(https://cdn.pixabay.com/photo/2018/04/13/17/57/background-3317139__340.jpg);background-repeat:no-repeat;background-size:100% 1000%">
<body>

<body>
<form name=view.php action=home2.php method=post>
<center>
<input name = submit type = submit value = Home>
<?php
require('db.php');
	$query = "SELECT Available_reg  FROM contest WHERE c_id=1";
	$result = mysqli_query($con, $query); 
	$row = mysqli_fetch_assoc($result);
	$num = $row['Available_reg'];
	echo "<br>";
	echo "<br>";
	echo "Available Number of Registrations : $num";

		$message = "No registrations available....";
    	echo "<script type='text/javascript'>alert('$message');</script>";
?>
</center>
</body>
</form>