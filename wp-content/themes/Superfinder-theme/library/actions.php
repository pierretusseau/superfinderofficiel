<?php
// Fonction dynamiqu affiche des posts
	function MySearch() {

		require(TEMPLATEPATH.'/library/class/lib.php');
		$cvine = new CVine();


		// J'appelle mon formulaire de recherche

			include_once(TEMPLATEPATH.'/parts/search-form.php');


		// include_once('parts/prototype/user_link.php');

		// ___________________ //
		// Listing des volumes //

			if (isset($_POST['recherche']) && ($_POST['recherche'] != "")) {
				$res = $cvine->search($_POST['recherche']);
				include_once(TEMPLATEPATH.'/parts/listing-volumes.php');
			} elseif (isset($_POST['recherche']) && ($_POST['recherche'] == "")) {
				// Si je fais une recherche, mais que le champs est vide
				echo "<h2>Vous n'avez pas entré de recherche</h2>";
			} else {
				// Do Nothing
			}


		// ___________________ //
		// Listing des numéros //

			if (isset($_GET['volume']) && ($_GET['volume'] != "")) {
				$res = $cvine->getIssues($_GET['volume']);
				include_once(TEMPLATEPATH.'/parts/listing-issues.php');
			}


		// ___________________ //
		// Page Issue //

			if (isset($_GET['issue']) && ($_GET['issue'] != "")) {
				$res = $cvine->getIssue($_GET['issue']);
				include_once(TEMPLATEPATH.'/parts/issue.php');
			}






	}
	add_action('foundationPress_before_content','MySearch',1,0);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRES !!!

	function BeforeFooter() {

		include_once(TEMPLATEPATH.'/parts/structure/dashboard.php');

	}
	add_action('foundationPress_before_footer','BeforeFooter',1,0);
