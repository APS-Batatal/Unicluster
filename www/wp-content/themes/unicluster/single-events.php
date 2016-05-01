<?php wp_enqueue_style('single', get_template_directory_uri() . '/library/min/css/pages/single/single.css'); ?>
<?php wp_enqueue_script( 'lightbox', get_stylesheet_directory_uri() . '/library/min/js/includes/lightbox.js', array( 'jquery' ), '', true ); ?>
<?php get_header(); ?>
<div id="inner-content" class="wrap cf">
	<section id="home">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="content">
				<h1 class="title"><?php the_title() ?></h1>
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
					<?php $i=0; ?>
						<?php foreach($gallery as $item): ?>
							<div class="item" rel=<?=$i?> style="background-image:url(<?= $item['image'] ?>)" data-src="<?= $item['image'] ?>">
							</div>
							<?php $i++; ?>
						<?php endforeach ?>
						<?php $i=0; ?>
				</div>
			</div>
		<?php endif ?>
		<?php endwhile;endif; ?>
	</section>
</div>
<?php require_once('includes/lightbox.php') ?>
<?php wp_enqueue_script('home', get_template_directory_uri() . '/library/min/js/pages/home/home.js'); ?>
<?php wp_enqueue_script('single', get_template_directory_uri() . '/library/min/js/pages/single/single.js'); ?>
<?php get_footer(); ?>
