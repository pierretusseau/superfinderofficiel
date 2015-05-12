<?php if ($res) : ?>
	<a href="index.php"> - Retourner en arrière</a>
	<h2><?php echo $_GET['volumename']; ?></h2>
	<div id="listing-issues" class="row">
		<ul class="small-block-grid-5">
			<?php foreach($res as $r) : ?>
			<li class="issue">
				<a href="?issue=<?php echo $r->id; ?>">
                    <div class="container"><img class="issue_cover" src="<?php echo $r->image->small_url; ?>" alt="<?php echo $r->name; ?>"></div>
					<h2>Issue ... #<?php echo $r->issue_number; ?></h2>
					<h3><?php echo $r->name; ?></h3>
				</a>
				<small><?php echo $r->cover_date; ?></small>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>