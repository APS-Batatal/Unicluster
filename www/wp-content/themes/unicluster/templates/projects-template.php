<?php /* Template Name: Projetos*/ ?>
<?php get_header() ?>
<?php wp_enqueue_style('projects', get_template_directory_uri() . '/library/min/css/pages/projects/projects.css');?>
<section id="projects">
	<?php  
		$total = wp_count_posts('projects');
		$total = $total->publish;
		$args = array(
			'post_type' => 'projects',
			'posts_per_page' => $total,
			'orderby'=>'post_date',
			'order'=>'DESC'
		)?>
	<?php $projects = get_posts($args);?>
	<?php $index = 0; ?>
		<nav id="menu-selector">
		<?php 
			$categories = array();
			foreach($projects as $project){
				$projCategories =  get_the_category($project->ID);
				if($projCategories){
					foreach($projCategories as $category){
						$category = get_category($category->term_id);
						if($category->parent){

							
							$category = array('name'=> $category->name, 'slug'=>$category->slug);
							$key = array_search($category, $categories);
							if($key === false){
								array_push($categories, $category);
							}							
						}
					}
				}
			}?>
				
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="#" rel="*">Todos</a></li>
			<?php foreach($categories as $category): ?>
				<li role="presentation"><a href="#" rel=".<?= $category['slug']?>"><?= $category['name'] ?></a></li>
			<?php endforeach; ?>
			</ul>
		</nav>
	<div class="grid">
		<?php foreach($projects as $project): ?>
			<?php
			$categories = get_the_category($project->ID);
			$childCategories = array();
			foreach ($categories as $category){
				if(($category->parent) > 0){
					array_push($childCategories, $category);
				}
			}
			$cat_html = '';
			$cat_sel = '';
			for($i=0; $i<sizeof($childCategories); $i++){
				$category = $childCategories[$i];
				$cat_html .= $category->name;
				$cat_html .= (($i < sizeof($childCategories)-1)?', ':'.');
				$cat_sel .= $category->slug . " ";
			}
			?>
			<div class="item grid-item <?= $cat_sel ?>">
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
					<p class="categories"><?= $cat_html ?></p>
				</div>
			</div>
			<?php $index++; ?>
		<?php endforeach; ?>
	</div>
</section>
<?php wp_enqueue_script('projects', get_template_directory_uri() . '/library/min/js/pages/projects/projects.js'); ?>
<?php get_footer() ?>