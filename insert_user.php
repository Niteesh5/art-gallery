<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css"/>
<script type="text/javascript">
	function fun()
	{
		alert("You have successfully registered!");
	}
</script>
</head>
<body style="background:url(https://data.whicdn.com/images/119647981/original.jpg);background-repeat:no-repeat;background-size:100% 200%">
<form name="insert_user" method="post" action="savedet_user.php">
<lable><center><h1>Sign UP</h1></center></lable>
<center>
<table>
<tr><td><b>Name :</b></td><td><input type="text" name="name" required></td></tr>
<br>
<tr><td><b>Age :</b></td><td><input type="text" name="age" required></td></tr>
<br>
<tr><td><b>Mobile :</b></td><td><input type="text" name="mob" required></td></tr>
<br>
<tr><td><b>Email :</b></td><td><input type="text" name="email" required></td></tr>
<br>
<tr><td><b>Username :<b/></td><td><input type="text" name="Username" required></td></tr>
<br>
<tr><td><b>Create Password :<br></td><td><input type="password" name="Pass" required></td></tr>
<br>
<tr><td><b>Confirm Password :<br></td><td><input type="password" name="Password" required></td></tr>
<br>
<tr><td><input name="submit" type="submit" value="Register" onclick="fun()"></td></tr>
</table>
</center>
</form>
</body>
</html>


