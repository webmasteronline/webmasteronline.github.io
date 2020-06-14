<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8" />

	<title>GD Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->

	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
	$options = get_option('sample_theme_options');
	echo $options['selectinput']; ?>.min.css" />
	<?php wp_head(); ?>
</head>
<body>

	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?php
				$idObj = get_category_by_slug('header');
				$id = $idObj->term_id;
				?>
				<?php if ( have_posts() ) : query_posts('cat=' . $id);
				while (have_posts()) : the_post(); ?>
	<header class="main-head main-color-bg" data-parallax="scroll" data-image-src="<?php
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										echo $large_image_url[0];
										?>" data-z-index="1">
		<?php endwhile; endif; wp_reset_query(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo-container">
						<?php dynamic_sidebar('logo'); ?>
					</div>
					<button class="toggle-mnu">
						<span class="sandwich">
							<span class="sw-topper">&nbsp;</span>
							<span class="sw-bottom">&nbsp;</span>
							<span class="sw-footer">&nbsp;</span>
						</span>						
					</button>
					<nav class="top-mnu">
						<ul>
							<li><a href="#about">Обо мне</a></li>
							<li><a href="#resume">Резюме</a></li>
							<li><a href="#portfolio">Портфолио</a></li>
							<li><a href="#contacts">Контакты</a></li>
						</ul>
					</nav>
				</div>						
			</div>
		</div>
		<div class="top-wrapper">
			<div class="top-descr">
				<div class="top-centered">
					<div class="top-text">
						<h1><?php echo get_bloginfo( 'name' ); ?></h1>
						<p><?php echo get_bloginfo( 'description' ); ?></p>
					</div>
				</div>
			</div>
		</div>		
	</header>