<?php
/*
	Template Name: Page d'accueil
*/
get_header();

?>

<div class="row" id="mywrapper">
	<div class="small-12 large-12 columns main-results" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php // the_content(); ?>
			</div>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
