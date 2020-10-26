<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body style="background:url(https://images.wallpaperscraft.com/image/stains_liquid_paint_145278_1920x1080.jpg);background-repeat:no-repeat;background-size:100% 1000%">
<body>

<body>
<form name=you_cant.php action=home2.php method=post>
<input name = submit type = submit value = Home>
<center>

<?php
require('db.php');
session_start();
$us = $_SESSION['UnamS'];
	echo "<br>";
	echo "<br>";
	echo"You have already registered for the contest.";
	echo "<br>";
	echo"Your painting .....";
	$query1 = "SELECT image as image FROM images  where id IN (SELECT P_id from map_user_painting WHERE Username = '$us')";  
	$result = mysqli_query($con, $query1); 
          $r = mysqli_fetch_assoc($result);

	echo '
          <center>
              <img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'" height="400" width="500" class="img-thumnail" />
            </center>
          '; 
?>
</center>
</body>
</form>