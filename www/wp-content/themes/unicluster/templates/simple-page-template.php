<?php /* Template Name: Simples*/ ?>
<?php wp_enqueue_style('projects', get_template_directory_uri() . '/library/min/css/pages/simple/simple.css');?>
<?php get_header() ?>
<section class="content-container">
	<h1><?= get_the_title() ?></h1>
	<div class="content">
		<?php
		if (have_posts()): while (have_posts()): the_post();
		the_content();
		endwhile; endif;
		?>
		<?php if(get_field('button_link') && get_field('button_title')): ?>
			<a class="btn" target="_blank" href="<?= get_field('button_link')?>" title="<?= get_field('button_title') ?>"><?= get_field('button_title') ?></a>
		<?php endif; ?>
	</div>
</section>
<?php get_footer() ?>