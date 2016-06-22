<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/apple-touch-icon-152x152.png">
	<link rel="icon" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/favicon-16x16.png">
	<link rel="icon" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/favicon-32x32.png">
	<link rel="icon" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/favicon-96x96.png">
	<link rel="icon" sizes="128x128" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/favicon-128.png">
	<link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon/favicon-196x196.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
	<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#3B4C25">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/favicon/win8-tile-icon.png">
	<meta name="theme-color" content="#3B4C25">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>
	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<!-- FACEBOOK SDK -->
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- //FACEBOOK SDK -->
	<div id="container" class="wrapper">
		<header class="header">
			<?php if(get_field('header_image','options')): ?>
				<img src="<?php echo get_field('header_image','options') ?>" alt="<?php echo get_bloginfo('name') ?>" />
			<?php else: ?>
				<h1><a href="<?= get_site_url(); ?>" title="<?= get_bloginfo('name') ?>"><?= get_bloginfo('name') ?></h1>
			<?php endif ?>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?= home_url(); ?>">
							<img class="brand" alt="Brand" src="<?= get_template_directory_uri().'/library/images/header/android.png' ?>">
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse">
						<?php wp_nav_menu(array(
							'container' => false,
							'container_class' => 'menu cf',
							'menu' => __( 'The Main Menu', 'bonestheme' ),
							'menu_class' => 'nav navbar-nav t-1of2',
							'theme_location' => 'main-nav',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,
							'fallback_cb' => ''
							)); ?>
							<form class="navbar-form navbar-right t-1of2" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
								<div class="form-group m-2of3">
									<input type="text" class="form-control" placeholder="Buscar" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
								</div>
								<button type="submit" class="btn btn-default m-1of3" id="searchsubmit" value="Search"><span class="glyphicon glyphicon-search"></span></button>
								<div class="clear"></div>
							</form>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
