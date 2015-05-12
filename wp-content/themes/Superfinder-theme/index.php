<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

<div id="main" class="row">
		<a href="index.php"><h1>Superfinder</h1></a>

		<?php // include_once('parts/prototype/user_link.php'); ?>

		<!-- // ___________________ // -->
		<!-- // Listing des volumes //-->
		<?php
			if (isset($_POST['recherche']) && ($_POST['recherche'] != "")) {
				$res = $cvine->search($_POST['recherche']);
				include_once('parts/listing-volumes.php');
			}
		?>

		<!-- // ___________________ // -->
		<!-- // Listing des numéros //-->
		<?php
			if (isset($_GET['volume']) && ($_GET['volume'] != "")) {
				$res = $cvine->getIssues($_GET['volume']);
				include_once('parts/listing-issues.php');
			}
		?>

		<!-- // ___________________ // -->
		<!-- // Page Issue //-->
		<?php
			if (isset($_GET['issue']) && ($_GET['issue'] != "")) {
				$res = $cvine->getIssue($_GET['issue']);
				include_once('parts/issue.php');
			}
		?>

	</div> <!-- FIN DE LA ROW PRINCIPALE -->
	
	<?php if ( have_posts() ) : ?>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>



	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
