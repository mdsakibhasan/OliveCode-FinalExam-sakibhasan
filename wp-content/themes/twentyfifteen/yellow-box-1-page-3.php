<?php
/*
 Template Name: yellow-box-1-page-3
 */
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/yellow-box-1-page-3.css" type="text/css">
</head>
<body>
	<div class="bag-img">
		<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/newbackground.png">
	</div>
	<section>
		<a href="" id="btn" style="position: fixed; top:0; right: 40px;"><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/cross.png" alt="yellow-box-2"></a>
		<div class="yellow-box-1-page-title-1">
			<?php $post_id = 145;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/><hr class="hrs"><br>
		<div class="yellow-box-1-page-title-2">
			<?php $post_id = 150;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-title-3">
			<?php $post_id = 267;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-content-1">
			<?php $post_id = 269;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-content-2">
			<?php $post_id = 271;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-content-3">
			<?php $post_id = 274;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-content-4">
			<?php $post_id = 276;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-3-content-5">
			<?php $post_id = 279;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-2-link-1">
			<a href="http://sakib.localhost/?page_id=211" id="demo">
				<?php $post_id = 282;
				$queried_post = get_post($post_id); 
				echo $queried_post->post_content;?>
			</a>
		</div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>