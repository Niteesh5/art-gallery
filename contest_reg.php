<html>
<head>
<title>Contest Register </title>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	function contest()
	{
		alert("You have successfully registered for the Dream Art contest!");
	}
</script>
</head>
<body style="background:url(https://images.wallpaperscraft.com/image/stains_liquid_paint_145278_1920x1080.jpg);background-repeat:no-repeat;background-size:100% 200%">
<body>
    <header>
        
    <div class="row">
        
    <ul class="main-nav">    
        <li class="active"><a href="home2.php"> HOME </a></li>
        
    </ul>    
        
    </div>
      
    </header>        
</body> 

<form action="painting.php" method="post" enctype="multipart/form-data">
<center>
<p22><b><h1> CONTEST REGISTRATION</h1></b> </p22> </br>
<center>   
<?php
	require('db.php');
	session_start();
	//$u = $_SESSION['UnamS'];


	$query = "SELECT Available_reg  FROM contest WHERE c_id=1";
	$result = mysqli_query($con, $query); 
	$row = mysqli_fetch_assoc($result);

	$num = $row['Available_reg'];
	echo "Available Number of Registrations : $num";
	echo "<br>";


	if($num == 0)
	{

		echo '<script type="text/javascript">'; 
		echo 'alert("No registrations available...");'; 
		echo 'window.location.href = "home2.php";';
		echo '</script>';
		
	
	}
	
	$qu = "SELECT Username FROM map_user_contest WHERE Username='$u'";
    $re1 = mysqli_query($con,$qu);
    $t = mysqli_fetch_assoc($re1);
    $ro1 = mysqli_num_rows($re1);
    $tu = $t['Username'];	
    echo"$tu";
    if($ro1 == 1)
        {
            header("Location: you_cant.php");
        }
?>
</center>
<p><b>Painting Title:</b>
<input type="text" name="title"> </p>
<br>
<p><b>Painting Type:</b>
<input type="text" name="type"> </p>
<br>
<p><b>Painting cost:</b>
<input type="text" name="cost"> </p>
<br>
<input type="file" name="image"/>
<br>
<input type="submit" name="submit" value="upload Painting" onclick="contest()" />   
  
</form> 
</center>


</body>
</html>

