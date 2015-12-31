<?php
/*
 Template Name: fig-2-page-1
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fig-2-page-1.css" type="text/css">
</head>
<body>
	<div class="bag-img">
		<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/newbackground.png">
	</div>
	<section>
		<a href="" id="btn" style="position: fixed; top:0; right: 40px;"><img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/cross.png" alt="yellow-box-2"></a>
		<div class="fig-2-page-1-titel-1">
			<?php $post_id = 693;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br/><hr class="hrs">
		
		<div class="fig-1-page-1-alllink">
			<div class="fig-1-page-1-alllink-1">
				<a href="http://sakib.localhost/?page_id=691" >
					<?php $post_id = 696;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-2">
				<a href="http://sakib.localhost/?page_id=712" >
					<?php $post_id = 698;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
			<div class="fig-1-page-1-alllink-3">
				<a href="http://sakib.localhost/?page_id=741" >
					<?php $post_id = 700;
					$queried_post = get_post($post_id); 
					echo $queried_post->post_content;?>
				</a>
			</div>
		</div><br><br><br><br>
		<div class="fig-1-page-1-titel-2">
			<?php $post_id = 702;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br><br>
		<div class="fig-2-page-1-img">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-2-page-1-img-2.jpg" style="width:380px; height:280px;">
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-2-page-1-img-1.jpg" style="width:420px; height:280px; margin-left:-7px;">
		</div><br>
		<div class="fig-2-page-1-titel-3">
			<?php $post_id = 704;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br>
		<div class="fig-2-page-1-titel-4">
			<?php $post_id = 706;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div><br>
		<div class="fig-2-page-1-titel-5">
			<?php $post_id = 708;
			$queried_post = get_post($post_id); 
			echo $queried_post->post_content;?>
		</div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main1.js"></script>
</body>
</html>