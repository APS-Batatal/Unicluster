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
			<div id="content">
				<div id="inner-content" class="wrap cf">
					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<h1 class="archive-title h2">Blog</h1>
						<ul>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li class="m-all t-1of2 d-1of3 h-1of4">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
										<a href="<?php the_permalink() ?>"></a>
										<header class="article-header">
											<h3 class="h2"><?php the_title(); ?></h3>
										</header>
										<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' )['0'] ?>
										<?php if(!is_null($featuredImage)): ?>
											<img src="<?=$featuredImage?>"	style="width:100%;height:auto" />
										<?php endif ?>
										<section class="entry-content cf">
											<?php the_excerpt(); ?>
										</section>
									</article>
								</li>
							<?php endwhile;endif; ?>
						</ul>
									<?php bones_page_navi(); ?>
						</main>
				</div>
			</div>
<?php get_footer(); ?>
