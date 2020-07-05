<?php get_header(); ?>
	<section id="about" class="s-about bg-light">
		<div class="section-header">
			<h2><?php
				$idObj = get_category_by_slug('about');
				$id = $idObj->term_id;
				echo get_cat_name($id);
				?></h2>
			<div class="s-descr-wrap">
				<div class="s-descr"><?php echo category_description($id); ?></div>
			</div>			
		</div>
		<div class="container">
			<div class="row">

				<?php if ( have_posts() ) : query_posts('p=9');
				while (have_posts()) : the_post(); ?>
				<div class="col-12 col-md-4 order-md-1 animation-1">
					<h3>Фото</h3>
					<div class="person">
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="popup" href="<?php
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										echo $large_image_url[0];
										?>"><?php the_post_thumbnail(array(220, 220)); ?></a>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-12 col-md-4 order-md-0 animation-2">
					<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
				</div>
				<?php endwhile; endif; wp_reset_query(); ?>

				<div class="col-12 col-md-4 order-md-2 animation-3">
					<?php if ( have_posts() ) : query_posts('p=12');
					while (have_posts()) : the_post(); ?>					
					<h3><?php the_title(); ?></h3>					
					<?php the_content(); ?>
					<?php endwhile; endif; wp_reset_query(); ?>
					<div class="social-wrap">
						<?php if ( have_posts() ) : query_posts('p=14');
						while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="resume" class="s-resume">
	<div class="section-header">
		<h2><?php
				$idObj = get_category_by_slug('resume');
				$id = $idObj->term_id;
				echo get_cat_name($id);
				?></h2>
		<div class="s-descr-wrap">
			<div class="s-descr"><?php echo category_description($id); ?></div>
		</div>		
	</div>
	<div class="resume_container">
		<div class="container">
			<div class="row">
				<div class="col-md-6 сol-sm-6 left">
					<h3><?php
								$idObj = get_category_by_slug('work');
								$id = $idObj->term_id;
								echo get_cat_name($id); ?></h3>
					<div class="resume-icon"><i class="icon-basic-case"></i></div>

					<?php if ( have_posts() ) : query_posts('cat=' . $id);
					while (have_posts()) : the_post(); ?>
					<div class="resume-item">
						<div class="year"><?php echo get_post_meta( $post->ID,'resume_years', true ); ?></div>
						<div class="resume-description"><?php echo get_post_meta( $post->ID,'resume_place', true ); ?><strong><?php the_title(); ?></strong></div>
					<?php the_content(); ?>						
					</div>
					<?php endwhile; endif; wp_reset_query(); ?>

				</div>
				<div class="col-md-6 сol-sm-6 right">
					<h3><?php
								$idObj = get_category_by_slug('educ');
								$id = $idObj->term_id;
								echo get_cat_name($id) ?></h3>
					<div class="resume-icon"><i class="icon-basic-book-pen"></i></div>					
					
					<?php if ( have_posts() ) : query_posts('cat=' . $id);
					while (have_posts()) : the_post(); ?>
					<div class="resume-item">
						<div class="year"><?php echo get_post_meta( $post->ID,'resume_years', true ); ?></div>
						<div class="resume-description"><?php echo get_post_meta( $post->ID,'resume_place', true ); ?><strong><?php the_title(); ?></strong></div>
					<?php the_content(); ?>						
					</div>
					<?php endwhile; endif; wp_reset_query(); ?>
					
				</div>
			</div>
		</div>
	</div>
	</section>
		<section id="portfolio" class="s-portfolio bg-dark">
		<div class="section-header">
			<h2><?php	$idObj = get_category_by_slug('s_portfolio');	$id = $idObj->term_id;	echo get_cat_name($id);	?></h2>
			<div class="s-descr-wrap">
				<div class="s-descr"><?php echo category_description($id); ?></div>
			</div>			
		</div>
		<div class="container-fluid">
			<div class="filter_div controls">
				<div class="row">
					<ul>
						<li class="filter active" data-filter="all" id="all">Все работы</li>
						<li class="filter" data-filter=".front_end" id="front_end">Фронтенд</li>
						<li class="filter" data-filter=".back_end" id="back_end">Бэкенд</li>
						<li class="filter" data-filter=".desine" id="desine">Дизайн</li>						
						<li class="filter" data-filter=".small_work" id="small_work">Мелкие работы</li>
					</ul>
				</div>
			</div>
			<div class="masonry-container" id="portfolio_grid">
				<div class="d-flex justify-content-center ">

						<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); ?>
						<div class="mix col-md-3 col-4 portfolio-item grid-item  <?php
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								foreach($tags as $tag) {
									echo ' ' . $tag->name;
								}
							}
							?>">
							<?php the_post_thumbnail(array(400, 300)); ?>
							<div class="port-item-cont">
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a href="#" class="popup-content">Просмотреть</a>
							</div>
							<div class="hidden">
								<div class="port-descr">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>								
											<h3><?php the_title(); ?></h3>
											<?php the_content(); ?>
												<img src="<?php
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
												echo $large_image_url[0];
												?>" alt="<?php the_title(); ?>" />
										</div>
									</div>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
	<section id="contacts" class="s-contacts bg-light">
		<div class="section-header">
			<h2><?php	$idObj = get_category_by_slug('s_contact');	$id = $idObj->term_id;	echo get_cat_name($id);	?></h2>
			<div class="s-descr-wrap">
				<div class="s-descr"><?php echo category_description($id); ?></div>
			</div>			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact-box">
						<div class="contants-icon icon-basic-geolocalize-01"></div>
							<h3>Адрес:</h3>
							<p><?php	$options = get_option('sample_theme_options');	echo $options['addresstext']; ?></p>						
					</div>
					<div class="contact-box">
						<div class="contants-icon icon-basic-smartphone"></div>
							<h3>Телефон:</h3>
							<p><?php
	$options = get_option('sample_theme_options');
	echo $options['phonetext']; ?></p>						
					</div>
					<div class="contact-box">
						<div class="contants-icon icon-basic-webpage-img-txt"></div>
							<h3>Веб-сайт:</h3>
							<p><a href="//<?php
								$options = get_option('sample_theme_options');
								echo $options['sitetext']; ?>" target="_blank"><?php
									$options = get_option('sample_theme_options');
									echo $options['sitetext']; ?></a></p>				
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="https://formspree.io/d.gnatishen@gmail.com" class="main-form" novalidate target="_blank" method="post">
						<label class="form-group">
							<span class="color_element">*</span> Ваше имя:
							<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваш E-mail:
							<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Введите E-mail " data-validation-email-message = "Не корректно введен E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваше сообщение:
							<textarea name="massage" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели ваше сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>												
						<button>Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</section>
		<section id="contacts" class="s-contacts bg-light">

<?php if ( have_posts() ) : query_posts('p=135');
while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>
<?php the_post_thumbnail(array(100, 100)); ?>

<?php endwhile; endif; wp_reset_query(); ?>
		</section>

<?php get_footer(); ?>