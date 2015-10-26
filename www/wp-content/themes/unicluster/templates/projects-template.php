<?php /* Template Name: Projetos*/ ?>
<?php get_header() ?>
<?php wp_enqueue_style('projects', get_template_directory_uri() . '/library/min/css/pages/projects/projects.css');?>
<section id="projects">
	<?php $projects = get_posts(array('post_type' => 'projects','orderby'=>'post_date','order'=>'DESC'));?>
	<?php $index =0; ?>
	<div class="grid">
		<?php foreach($projects as $project): ?>
		<div class="item grid-item">
			<div class="item-content">
				<h2><?= $project->post_title ?></h2>
				<?php if (has_post_thumbnail( $project->ID )) : ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $project->ID ), 'single-post-thumbnail' ); ?>
					<div class="image" style="background-image:url(<?= (!is_null($image))? reset($image):'' ?>)"></div>
				<?php endif; ?>
				<?php $content = $project->post_content ?>
				<p><?= (strlen($content)>180)? (substr($content,0,180)."...") : $content; ?></p>
				<div class="clear"></div>
				<a class="btn" href="<?= get_permalink($project->ID) ?>">veja mais</a>
				<?php $categories =wp_get_post_categories($project->ID); ?>
				<?php  foreach ($categories as $category):?>
					
				<?php  endforeach;?>

			</div>
		</div>
		<?php $index++; ?>
		<?php endforeach; ?>
		<?php var_dump($project) ?>
	</div>
</section>
<?php wp_enqueue_script('projects', get_template_directory_uri() . '/library/min/js/pages/projects/projects.js'); ?>
<?php get_footer() ?>