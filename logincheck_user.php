<html>
<head>
<title>Login Form Design</title>
<link rel="stylesheet" type="text/css" href="style_user.css">
</head>
<body>
<div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form name="Login_Page.php" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login" onclick="fun()">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>       
    </div>
</body>




<?php
require('db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    $query = "SELECT * FROM `user` WHERE Username='$Username' and Password='$Password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['username'] = $username;
            header("Location: homepage.php");
        }
           else
        {
              $message = "Username and/or Password incorrect.\\nTry again.";
              echo "<script type='text/javascript'>alert('$message');</script>";

        }
    }
?>
