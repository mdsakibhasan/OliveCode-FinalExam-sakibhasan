<?php
/*
 Template Name: fig-1-page-5
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fig-1-page-5.css" type="text/css">
</head>
<body>
	<div class="bag-img">
		<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/newbackground.png">
	</div>
	<section>
		<a href="" id="btn" style="position: fixed; top:0; right: 40px;"><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/cross.png" alt="yellow-box-2"></a>
		<div class="fig-1-page-1-titel-1">
			<?php $post_id = 358;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/><hr class="hrs">
		
		<div class="fig-1-page-1-alllink">
			<div class="fig-1-page-1-alllink-1">
				<a href="http://sakib.localhost/?page_id=356" >
					<?php $post_id = 367;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-2">
				<a href="http://sakib.localhost/?page_id=374" >
					<?php $post_id = 376;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-3">
				<a href="http://sakib.localhost/?page_id=510" >
					<?php $post_id = 512;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-4">
				<a href="http://sakib.localhost/?page_id=573" >
					<?php $post_id = 575;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-5">
				<a href="http://sakib.localhost/?page_id=627" >
					<?php $post_id = 629;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-6">
				<a href="http://sakib.localhost/?page_id=637" >
					<?php $post_id = 639;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
		</div><br><br><br><br>
		<div class="fig-1-page-5-titel-2">
			<?php $post_id = 631;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-1-page-4-img-1.jpg" ></div><br>
		<div class="fig-1-page-5-titel-3">
			<?php $post_id = 633;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-1-page-5-titel-4">
			<?php $post_id = 635;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>