<?php
/*
 Template Name: fig-3-page-2
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fig-3-page-2.css" type="text/css">
</head>
<body>
	<div class="bag-img">
		<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/newbackground.png">
	</div>
	<section style="margin-top: 50px;">
		<a href="" id="btn" style="position: fixed; top:0; right: 40px;"><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/cross.png" alt="yellow-box-2"></a>
		<div class="fig-3-page-1-titel-1">
			<?php $post_id = 871;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/><hr class="hrs">
		
		<div class="fig-3-page-1-alllink">
			<div class="fig-3-page-1-alllink-1">
				<a href="http://sakib.localhost/?page_id=857" >
					<?php $post_id = 859;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-2">
				<a href="http://sakib.localhost/?page_id=913" >
					<?php $post_id = 861;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-3">
				<a href="http://sakib.localhost/?page_id=925" >
					<?php $post_id = 863;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-4">
				<a href="http://sakib.localhost/?page_id=944" >
					<?php $post_id = 865;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-5">
				<a href="http://sakib.localhost/?page_id=988" >
					<?php $post_id = 866;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-6">
				<a href="http://sakib.localhost/?page_id=637" >
					<?php $post_id = 867;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
		</div><br><br><br><br>
		<div class="fig-3-page-1-titel-2">
			<?php $post_id = 916;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br><br>
		<div class="fig-3-page-1-titel-3">
			<?php $post_id = 918;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-3-page-1-titel-4">
			<?php $post_id = 920;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-3-page-1-titel-5"><a href="http://www.jp.philippineair.com/" target="_blank">http://www.jp.philippineair.com/</a></div><br><br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7853.458932341002!2d124.019144!3d10.202611!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1451332082270" width="425" height="335" frameborder="0" style="border:0" allowfullscreen></iframe><br>
		<div class="fig-3-page-1-titel-6">
			<?php $post_id = 922;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>