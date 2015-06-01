<form class="row collapse superform" action="" method="post">
		<div class="small-9 columns">
			<input type="text" name="recherche" placeholder="Rechercher un volume" value="<?php if (isset($_POST['recherche'])) {echo $_POST['recherche'];} ?>">
		</div>
		<div class="small-3 columns">
			<input type="submit" class="button postfix" value="OK">
		</div>
</form>