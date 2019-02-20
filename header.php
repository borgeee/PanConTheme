<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : the_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/ihover.css">	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	 
	<!--font-->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--animate-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
<?php wp_head(); ?>
</head>

<body>

	<div class="wrapper">
		<span class="expand">MENU</span><!--activate mobile nav-->

		<nav class="mainnav">
			<div class="menunav">	
				<?php wp_nav_menu( array(
				    'theme_location' => 'primary',
				    'container_class' => 'mainnav',
				    'depth' => '2'
				  )
				);?>
			</div>

			<div class="social">
				<a href=""><i title="Facebook" class="fa fa-3x fa-facebook-official fa-blue" aria-hidden="true"></i></a>
				<a href=""><i title="Twitter" class="fa fa-3x fa-twitter-square fa-blue" aria-hidden="true"></i></a>
				<a href=""><i title="Instagram" class="fa fa-3x fa-instagram fa-blue" aria-hidden="true"></i></a>
			</div>
		</nav>

		<header>
			<section><img width="100%" src="<?php echo get_parent_theme_file_uri('img/header.jpg'); ?>" alt="Header Image"></section>
		</header>
		<!--/wp-header-->
