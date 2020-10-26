<?php
require('db.php');
session_start();
$nam=$_SESSION['UnamS'];
$title=$_POST["title"];
$type=$_POST["type"];
$cost=$_POST["cost"];
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if($check !== false)
    {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }

    $dataTime = date("Y-m-d H:i:s");
    
    

        $query = "SELECT Available_reg  FROM contest WHERE c_id=1";
        $result = mysqli_query($con, $query); 
        $row = mysqli_fetch_assoc($result);
        $num = $row['Available_reg'];
        if($num != 0)
        {
            $sql = $con->query("INSERT INTO map_user_contest (Username) VALUES ('$nam')");
            $sql3 =$con->query("update contest set Available_reg = Available_reg - 1  where c_id = 1");
            $insert = $con->query("INSERT into images (Title,Type,image,cost,created) VALUES ('$title','$type','$imgContent','$cost','$dataTime')");
            $in = $con->query("INSERT INTO posts (post_text) VALUES ('$title')");
            if($insert)
            {
                header("Location: home2.php");
            }
            else
            {
                echo "File upload failed, please try again.";
            }  
        }
        else
        {
            $message = "No registrations available...\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location: home2.php");
        }
       
}   
else
{
    echo "Please select an image file to upload.";
}

    $sql = "SELECT id FROM images WHERE image = '$imgContent'";
    $mysqlresult=mysqli_query($con,$sql);
    $row =mysqli_fetch_assoc( $mysqlresult );
    $r = $row['id'];

    $sql2 = $con->query("INSERT INTO map_user_painting (Username,P_id) VALUES ('$nam','$r')");
    
?>