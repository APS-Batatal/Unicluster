<?php
/*
Template Name: Home
*/
?>
<?php wp_enqueue_style('single', get_template_directory_uri() . '/library/min/css/pages/single/single.css'); ?>
<?php get_header(); ?>
<div id="inner-content" class="wrap cf">
	<section id="home">
		<div id="carousel-home" class="carousel">
			<?php foreach(get_field('carousel') as $item): ?>
				<div class="item" style="background-image:url(<?= wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), 'large' )['0'] ?>)">
					<a href="<?= get_permalink($item->ID) ?>"></a>
					<h1 class="title"><?= $item->post_title ?></h1>
					<?php $category = get_post_type_object($item->post_type)->labels->name ?>
					<h2 class="category"><a href="<?=get_site_url?>/<?= strtolower($category) ?>"><?= $category ?></a></h2>
				</div>
			<?php endforeach ?>
		</div>
		<div class="clear"></div>
		<div class="content">
			<?= $post->post_content ?>
		</div>
		<div class="clear"></div>
		<div class="blocks-content content">
			<ul>
				<?php foreach(get_field('blocks') as $block): ?>
					<li>
						<?php if($block['link']): ?>
							<a href="<?= $block['link'] ?>"></a>
						<?php endif ?>
						<?php if($block['title']): ?>
							<h2><?= $block['title'] ?></h2>
						<?php endif ?>
						<?php if($block['image']): ?>
							<div class="img" style="background-image:url(<?= $block['image'] ?>)"></div>
						<?php endif ?>
						<?php if($block['content']): ?>
							<div>
								<?= $block['content'] ?>
							</div>
						<?php endif ?>
				</li>
				<?php endforeach ?>
			</ul>
			<!-- <pre>
				<?php var_dump(get_field('blocks')) ?>
			</pre> -->
		</div>
	</section>
</div>
<?php wp_enqueue_script('home', get_template_directory_uri() . '/library/min/js/pages/home/home.js'); ?>
<?php get_footer(); ?>
