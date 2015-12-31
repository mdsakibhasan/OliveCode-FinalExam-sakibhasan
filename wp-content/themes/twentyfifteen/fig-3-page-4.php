<?php
/*
 Template Name: fig-3-page-4
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fig-3-page-4.css" type="text/css">
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
				<a href="http://sakib.localhost/?page_id=958" >
					<?php $post_id = 866;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-3-page-1-alllink-6">
				<a href="http://sakib.localhost/?page_id=988" >
					<?php $post_id = 867;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
		</div><br><br><br><br>
		<div class="fig-3-page-4-titel-2">
			<?php $post_id = 946;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-3-page-4-titel-3">
			<?php $post_id = 948;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-3-page-4-titel-4">
			<?php $post_id = 950;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-3-page-4-titel-5">E-mail:<a href="mailto:info@islands-blue.com">info@islands-blue.com</a></div><br><br>
		<div class="fig-3-page-4-titel-6">
			<?php $post_id = 953;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-3-page-4-titel-5"><a href="http://www.islands-blue.com/" target="_blank">http://www.islands-blue.com</a></div>
		<div class="fig-3-page-4-titel-7">
			<?php $post_id = 955;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
		<div class="fig-3-page-4-titel-5"><a href="http://www.islands-blue.com/overseas/philippin/index_02.html" target="_blank">http://www.islands-blue.com/overseas/philippin/index_02.html</a></div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>