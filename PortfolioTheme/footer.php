	<footer class="main-footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>
					<div class="social-wrap">
						<?php if ( have_posts() ) : query_posts('p=14');
						while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>


<?php wp_footer(); ?>
</body>
</html>
