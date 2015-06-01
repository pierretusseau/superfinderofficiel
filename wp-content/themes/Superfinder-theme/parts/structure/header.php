<?php
	require('includes/lib.php');
	$cvine = new CVine();
	//echo "<pre>";
	//var_dump($cvine);
	//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/app.css">
</head>
	<body>
		<header id="header">
			<div class="header-center">
				<nav class="row">
					<ul class="header-links">
						<li class="header-link"><a href="index.php">Accueil</a></li>
						<li class="header-link"><a href="#">Dashboard</a></li>
					</ul>
				</nav>
                <img src="http://localhost:8888/web2/superfinderofficiel/wp-content/themes/Superfinder-theme/PICTOS/done1.png" alt="precedent" class="arrow"/>
			</div>
		</header>
        <?php include_once('parts/search-form.php'); ?>