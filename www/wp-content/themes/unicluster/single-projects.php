<?php wp_enqueue_style('home', get_template_directory_uri() . '/library/min/css/pages/home/home.css'); ?>
<?php get_header(); ?>
<div id="inner-content" class="wrap cf">
	<section id="home">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' )['0'] ?>
			<?php if(!is_null($featuredImage)): ?>
				<div class="featured-image" style="background-image:url(<?= $featuredImage ?>)"></div>
			<?php endif ?>
			<div class="content">
				<h1 class="title"><?php the_title() ?></h1>
				<?= the_content() ?>
			</div>
			<div class="gallery-container">
				<div id="carousel-home" class="carousel">
					<?php $gallery = get_field('gallery') ?>
					<?php if($gallery && sizeof($gallery)>0): ?>
						<?php foreach($gallery as $item): ?>
							<div class="item" style="background-image:url(<?= $item['image'] ?>)">
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		<?php endwhile;endif; ?>
	</section>
</div>
<div class="lightbox">
	<div class="overlay">		
	</div>
</div>
<?php wp_enqueue_script('home', get_template_directory_uri() . '/library/min/js/pages/home/home.js'); ?>
<?php wp_enqueue_script('single', get_template_directory_uri() . '/library/min/js/pages/single/single.js'); ?>
<?php get_footer(); ?>
