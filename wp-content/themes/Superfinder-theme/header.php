<?php
	//	echo "<pre>";
	//	var_dump($cvine);
	//	echo "</pre>";
?>


<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<header id="header">
			<div class="header-center">
				<nav class="row">
					<ul class="header-links">
						<li class="header-link"><a href="index.php" class="pictoheader"><img src="wp-content/themes/Superfinder-theme/PICTOS/search.png" width='30%'></a></li>
						<li class="header-link"><a href="#"><img src="wp-content/themes/Superfinder-theme/PICTOS/list7.png" width='30%'></a></li>
						<li class="header-link2"><a href="wp-login.php"><img src="wp-content/themes/Superfinder-theme/PICTOS/connexion.png" width='30%'></a></li>
						<li class="header-link2"><a href="#"><img src="wp-content/themes/Superfinder-theme/PICTOS/moncompte.png" width='30%'></a></li>

					</ul>
				</nav>
                <div id="logo_header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/PICTOS/logo.png" alt="logo" class="logo"/></div>
			</div>
		</header>
    <?php include_once('parts/search-form.php'); ?>
	<?php do_action('foundationPress_after_body'); ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

	<?php do_action('foundationPress_layout_start'); ?>

	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
	</nav>

	<?php get_template_part('parts/off-canvas-menu'); ?>

	<?php //get_template_part('parts/top-bar'); ?>

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>
