<?php
/*
Template Name: caohagan 
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.caohagan.com</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/caohagan.css" type="text/css">
</head>
<body>
	<section>
		<img class="oneimg" src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/oneimg.png" alt="">
		<img class="twoimg" src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/twoimg.png" alt="">
		<img class="threeimg">
		<img class="fourimg">
		<div class="yellow-box-1">
			<div class="yellow-box-1-content">
				<a href="#">here is the olivecode site 1</a>
				<?php $post_id = 10; 
				$queried_post = get_post($post_id); 
				echo $queried_post->post_content;?>
			</div>
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/arrow1.png" alt="yellow-box-1">
		</div>
		<div class="yellow-box-2">
			<div class="yellow-box-2-content">
				<a href="#">here is the olivecode site 2</a>
			</div>
			<img src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/arrow2.png" alt="yellow-box-2">
		</div>
		<img class="fiveimg">
		<img class="siximg">
		<img class="sevenimg">
		<div class="fig-one-img-one">
			<img class="fig-one-img-1" src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-one-img-1.png" alt="">
			<img class="fig-one-img-2" src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-one-img-2.png" alt="">
			<img class="fig-one-img-3" src="http://sakib.localhost/wp-content/themes/twentyfifteen/images/fig-one-img-3.png" alt="">
		</div>>
	</section>
	<!-- <script type="text/javascript" >
		function clickhere(){
			alert('thsis is me');
			}
	</script> -->
</body>
</html>