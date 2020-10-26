<!DOCTYPE html>
<html>
<head>
  <title>
    highest likes
  </title>

  
  <link rel="stylesheet" type="text/css" href="style_user.css">  
</head>

<body>
    <header>
        
    <div class="row">
        
    <ul class="main-nav">    
        <li class="active"><a href="home2.php"> #Home </a></li>
        
    </ul>    
        
    </div>
      
    </header>        
</body>    

<?php
  require('db.php');

  $sql="SELECT id,post_text,MAX(like_count) as like_count FROM posts s";

  $mysqlresult=mysqli_query($con,$sql);
  $count=mysqli_num_rows($mysqlresult);

  $row =mysqli_fetch_assoc($mysqlresult);
  $win_id = $row['id'];
  $post_text = $row['post_text'];
  
  $query1 = "SELECT image FROM images WHERE id = '$win_id'";
          $result = mysqli_query($con, $query1); 
          $row_id = mysqli_fetch_assoc($result);

  $query2 = "SELECT Username FROM map_user_painting WHERE P_id = '$win_id'";
          $res = mysqli_query($con, $query2); 
          $uname = mysqli_fetch_assoc($res);
          $unam = $uname['Username'];
*
  $query3 = "SELECT name FROM user WHERE Username = '$unam'";
          $res = mysqli_query($con, $query3); 
          $name = mysqli_fetch_assoc($res);
          //$nam = $name['Username'];


?>
<body bgcolor="cyan">
<center><table border="1" cellpadding="10" cellspacing="0">
  <thead style="color:green;font-size:25px;">
    <tr>
      <th>id</th>
      <th>Name of artist</th>
      <th>Image title</th>
      <th>No of likes</th>
    </tr>
    </tr>
  </thead>
  <tbody style="color:black;font-size:20px;">
    <?php
      
      if( $count==0 ){
        echo '<tr><td colspan="4">No data to display</td></tr>';
      }
      else
      {
          
          echo "
            <tr>
              <td>{$row['id']}</td>
              <td>{$name['name']}</td>
              <td>{$row['post_text']}</td>
              <td>{$row['like_count']}</td>
            </tr>\n";
          $query = "SELECT image FROM images WHERE id = '$win_id'";
          $result = mysqli_query($con, $query); 
          $row1 = mysqli_fetch_assoc($result);
          echo"Paninting with highest likes";
          echo '
          <center>
              <img src="data:image/jpeg;base64,'.base64_encode($row_id['image'] ).'" height="400" width="500" class="img-thumnail" />
            </center>
          '; 
        
      }
    ?>
  </tbody>
</table></center>
</body>
