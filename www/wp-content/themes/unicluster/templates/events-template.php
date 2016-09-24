<?php /* Template Name: Eventos*/ ?>
<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>
<?php wp_enqueue_style('archive', get_template_directory_uri() . '/library/min/css/pages/archive/archive.css'); ?>
<?php wp_enqueue_script( 'archive', get_stylesheet_directory_uri() . '/library/min/js/pages/archive/archive.js', array( 'jquery' ), '', true ); ?>
<?php get_header(); ?>
	<?php  
		$total = wp_count_posts('events');
		$total = $total->publish;
		$args = array(
			'post_type' => 'events',
			'posts_per_page' => $total,
			'orderby'=>'post_date',
			'order'=>'DESC'
		)?>
	<?php $events = get_posts($args);?>
			<div id="content">
				<div id="inner-content" class="wrap cf">
					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<h1 class="archive-title h2">Eventos</h1>
						<ul>
							<?php foreach($events as $index => $event):  ?>
								<li class="m-all t-1of2 d-1of3 h-1of4">
									<article id="post-<?php echo $event->ID ?>" <?php post_class( 'cf' ); ?> role="article" style="background-color:<?php echo get_field('category_color', $event->ID) ?>">
										<a href="<?php echo get_post_permalink($event->ID) ?>"></a>
										<header class="article-header">
											<h3 class="h2"><?php echo $event->post_title ?></h3>
										</header>
										<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($event->ID), 'large' )['0'] ?>
										<?php if(!is_null($featuredImage)): ?>
											<img src="<?=$featuredImage?>"	style="width:100%;height:auto" />
										<?php endif ?>
										<section class="entry-content cf">
											<p><?php echo (strlen($event->post_content)>180)? (substr($event->post_content,0,180)."...") : $event->post_content; ?></p>
										</section>
									</article>
								</li>
							<?php endforeach; ?>
						</ul>
									<?php bones_page_navi(); ?>
						</main>
				</div>
			</div>
<?php get_footer(); ?>