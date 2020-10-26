<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style_user.css">
</head>
<body style="background:url(https://images.pexels.com/photos/304664/pexels-photo-304664.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-repeat:no-repeat;background-size:100% 100%">

    <div class="loginbox">
    <img src="1.PNG" class="avatar">
        <h1>Login Here</h1>
        <form name="login_user.php" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="Username" placeholder="Username">
        
            <input type="password" name="Password" placeholder="Password">
           
           <center><input type="submit" name="submit" value="Login" ></center> 
            
           
            <a href="insert_user.php">Don't have an account ? Register</a>
        </form>
        
    </div>


<?php
require('db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unam = $_REQUEST['Username'];
    $pass = $_REQUEST['Password'];
    $query = "SELECT * FROM `user` WHERE Username='$unam' and Password='$pass'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['UnamS'] = $unam;
            header("Location: home2.php");
        }else
        {
              $message = "Username and/or Password incorrect.\\nTry again.";
              echo "<script type='text/javascript'>alert('$message');</script>";

        }
    }
?>
</body>
</html>
