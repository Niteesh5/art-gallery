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
		    <body>
		        <h1>PHP Like System</h1>
		<?php
		$images = $db->get('images');
		
		if (isset($_POST['like'])) {
		    $p_id = $_POST['like'];
		    $query = Array('like_count'=>$db->inc(1));
		    $db->where('id', $p_id);
		    $db->update('images', $query);
		
		    $db->insert('likes', Array('post_id'=>$post_id));
		
		}
		
		foreach ($images as $img) {
		
		    echo 'img src="data:image/jpeg;base64,'.base64_encode($img["image"]) .'&nbsp;<button data-imageid="'.$img['id'].'" data-likes="'.$img['like_count'].'" class="like">Like ('.$img['like_count'].')</button><hr />';
		}
		
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(".like").click(function(){
		    let button = $(this)
		    let post_id = $(button).data('imageid')
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

	
	
	
