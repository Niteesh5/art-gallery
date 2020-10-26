<?php
		require 'vendor/autoload.php';
		require_once ('MysqliDb.php');
		$db = new MysqliDb ("localhost","root","","vindhya");
		
		?>
		<!DOCTYPE html>
		<html lang="en" dir="ltr">
		    <head>
		        <meta charset="utf-8">
		        <title>PHP Like System</title>
		        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		    </head>
		    <body style="background:url(https://t4.ftcdn.net/jpg/01/62/64/13/240_F_162641330_UOAUGcx4ZV2FopNCrvUARt5gceLpHg4c.jpg);background-repeat:no-repeat;background-size:100% 200%">
		        <center><h2>#DREAM ART LIKES</h2></center>
		<?php
		$posts = $db->get('posts');
		
		if (isset($_POST['like'])) {
		    $post_id = $_POST['like'];
		    $query = Array('like_count'=>$db->inc(1));
		    $db->where('id', $post_id);
		    $db->update('posts', $query);
		
		    $db->insert('likes', Array('post_id'=>$post_id));
		
		}
		
		foreach ($posts as $post) {
		
		    echo $post["post_text"] .'&nbsp;<button data-postid="'.$post['id'].'" data-likes="'.$post['like_count'].'" class="like">Like ('.$post['like_count'].')</button><hr />';
		}
		
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(".like").click(function(){
		    let button = $(this)
		    let post_id = $(button).data('postid')
		$.post("likes.php",
		{
		    'like' : post_id
		},
		function(data, status){
		    $(button).html("Like (" + ($(button).data('likes')+1) + ")")
		    $(button).data('likes', $(button).data('likes')+1)
		});
		});
		</script>
		</body>
		</html>

	
	
	
