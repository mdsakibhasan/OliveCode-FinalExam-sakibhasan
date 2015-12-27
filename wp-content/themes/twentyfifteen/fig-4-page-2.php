<?php
/*
 Template Name: fig-4-page-2
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fig-4-page-2.css" type="text/css">
</head>
<body>

		<a href="http://sakib.localhost/" ><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/cross.png" alt="yellow-box-2" style="margin-left: 93%;" ></a>

	<div class="bag-img">
		<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/newbackground.png">
	</div>
	<section>
		<div class="fig-2-page-1-titel-1">
			<?php $post_id = 755;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/><hr class="hrs">
		
		<div class="fig-1-page-1-alllink">
			<div class="fig-1-page-1-alllink-1">
				<a href="http://sakib.localhost/?page_id=745" >
					<?php $post_id = 747;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-4-page-1-alllink-2">
				<a href="http://sakib.localhost/?page_id=827" >
					<?php $post_id = 749;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-3">
				<a href="http://sakib.localhost/?page_id=843" >
					<?php $post_id = 751;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
		</div><br><br><br><br>
		<div class="fig-1-page-1-titel-2">
			<?php $post_id = 829;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-4-page-2-titel-3">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-1.png" style="width: 240px; height: 370px"><br>
			<?php $post_id = 831;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-4-page-2-titel-4">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-2.png" style="width: 240px; height: 280px"><br>
			<?php $post_id = 833;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-4-page-2-titel-5">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-3.png" style="width: 240px; height: 340px"><br>
			<?php $post_id = 835;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br><br>
		<div class="fig-4-page-2-titel-6">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-4.png" style="width: 240px; height: 315px"><br>
			<?php $post_id = 837;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-4-page-2-titel-7">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-5.png" style="width: 240px; height: 180px"><br>
			<?php $post_id = 838;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-4-page-2-titel-8">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-4-page-2-img-6.png" style="width: 240px; height: 340px"><br>
			<?php $post_id = 839;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		
		
		
	<section>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	 <script>
	 	 $(document).ready(function(){
			$("#aaa").click(function(){
					
				});
		 	});
	</script>
</body>
</html>