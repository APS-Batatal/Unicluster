<?php
/*
Template Name: Home
*/
?>
<?php wp_enqueue_style('home', get_template_directory_uri() . '/library/min/css/pages/home/home.css'); ?>
<?php get_header(); ?>
<section id="home">
	<div id="carousel-home" class="carousel">
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
	</div>
</section>
<?php wp_enqueue_script('home', get_template_directory_uri() . '/library/min/js/pages/home/home.js'); ?>
<?php get_footer(); ?>