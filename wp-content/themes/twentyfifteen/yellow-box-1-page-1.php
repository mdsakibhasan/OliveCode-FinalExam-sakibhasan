<?php
/*
 Template Name: yellow-box-1-page-1
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/yellow-box-1-page-1.css" type="text/css">
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
		<div class="yellow-box-1-page-1-title-3">
			<?php $post_id = 191;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-1">
			<?php $post_id = 193;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-2">
			<?php $post_id = 197;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/>
		<div class="yellow-box-1-page-1-content-3">
			<?php $post_id = 200;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-4">
			<?php $post_id = 202;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-5">
			<?php $post_id = 204;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-6">
			<?php $post_id = 206;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-content-7">
			<?php $post_id = 209;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-content-9">
			<?php $post_id = 184;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="yellow-box-1-page-1-link-1">
			<a href="http://sakib.localhost/?page_id=143" id="demo">
				<?php $post_id = 212;
				$queried_post = get_post($post_id); 
				echo $queried_post->post_content;?>
			</a>
		</div>
		<div class="yellow-box-1-page-1-link-2">
			<a href="http://sakib.localhost/?page_id=211" id="demo">
				<?php $post_id = 214;
				$queried_post = get_post($post_id); 
				echo $queried_post->post_content;?>
			</a>
		</div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>