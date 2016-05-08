<?php wp_enqueue_style('single', get_template_directory_uri() . '/library/min/css/pages/single/single.css'); ?>
<?php get_header(); ?>
<div id="inner-content" class="wrap cf">
	<section id="home">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="content">
				<h1 class="title"><?php the_title() ?></h1>
				<h2 class="author">Por: <?php the_author() ?></h2>
				<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' )['0'] ?>
				<?php if(!is_null($featuredImage)): ?>
					<div class="featured-image" style="background-image:url(<?= $featuredImage ?>)"></div>
				<?php endif ?>
				<?= the_content() ?>
			</div>
			<?php $gallery = get_field('gallery') ?>
			<?php if($gallery && sizeof($gallery)>0): ?>
			<div class="gallery-container">
				<h2>Fotos</h2>
				<div id="carousel-home" class="carousel">
						<?php foreach($gallery as $item): ?>
							<div class="item" style="background-image:url(<?= $item['image'] ?>)">
							</div>
						<?php endforeach ?>
				</div>
			</div>
		<?php endif ?>
		<?php endwhile;endif; ?>
	</section>
	<section class="comment-section">
		<!-- Your embedded comments code -->
		<div class="fb-comments"data-href="<?php the_permalink(); ?>" data-num-posts="2" mobile="false"></div>
	</section>
<div class="lightbox">
	<div class="overlay">
	</div>
</div>
<?php wp_enqueue_script('home', get_template_directory_uri() . '/library/min/js/pages/home/home.js'); ?>
<?php wp_enqueue_script('single', get_template_directory_uri() . '/library/min/js/pages/single/single.js'); ?>
<?php get_footer(); ?>
