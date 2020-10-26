<!DOCTYPE html>
<html>
<head>
	<title>
		image uploading
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
</head>
<body style="background:url(https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-05.jpg);background-repeat:no-repeat;background-size:100% 200%">
<body>
    <header>
        
    <div class="row">
        
    <ul class="main-nav">    
        <li class="active"><a href="likes.php"> #WANT TO LIKE PAINTINGS </a></li>
        <li class="active"><a href="home2.php"> #Home </a></li>
        
    </ul>    
        
    </div>
      
    </header>        
</body>    

<form action="likes.php" name="view1.php" method="post"> 
<div class="container" style="width:500px;">  
	<table class="table table-bordered">  
                     <tr>  
                          <th><center>DREAM ART GALLERY</center></th>  
                     </tr>  
	<?php
		require('db.php');

		$query = "SELECT image,title FROM images ORDER BY id DESC";  
		$result = mysqli_query($con, $query); 
		
		$i=0;
		while($row = mysqli_fetch_array($result))  
		{  

    		echo '
    			<tr>
    				<td>
    					<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="500" width="500" class="img-thumnail" />
    				</td>
    			</tr>
    			'; 
    			echo "<td>" . $row['title'] . "</td>";
    							
    				
    			$i++;
    	}
	?>  
	</table>
  </div>
  </form>
</body>
</html>


