<?php
/*
 Template Name: Page_01
*/
?>

<h1></h1>

<div id="content" style="width:500px; height:500px; background:yellow;">

	<?php $post_id = 138; 
	$queried_post = get_post($post_id); 
	echo $queried_post->post_content;?>
	
	<button id="aaa"><a href="http://sakib.localhost/" id="demo">joss button</a></button>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	 <script>
	 	 $(document).ready(function(){
			$("#aaa").click(function(){
					
				});
		 	});
	</script>
	
	
	
	
	
	
</div>