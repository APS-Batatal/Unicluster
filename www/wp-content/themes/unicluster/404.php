<?php wp_enqueue_style('error', get_template_directory_uri() . '/library/min/css/pages/error/error.css'); ?>
<?php get_header(); ?>
<div id="inner-content" class="wrap cf">
	<section id="error">
		<div class="content">
			<div class="error-icon"></div>
			<h1>Erro 404!</h1>
			<h2>O conteúdo não existe</h2>
		</div>
	</section>
</div>
<?php get_footer(); ?>
