<?php get_header(); ?>

<<<<<<< Updated upstream
<div id="main" class="row">
=======
	<div id="main" class="row">
>>>>>>> Stashed changes
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

	
<?php  include_once('parts/structure/dashboard.php'); ?>
<?php get_footer(); ?>
