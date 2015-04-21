<?php if ($res) : ?>
	<div id="listing-issues" class="row">
		<ul class="small-block-grid-1">
			<?php foreach($res as $r) : ?>
			<li class="issue row">
				<img class="issue_cover columns small-6" src="<?php echo $r->image->small_url; ?>" alt="<?php echo $r->name; ?>">
				
				<h3>Nom : <a href="?issue=<?php echo $r->id; ?>&amp;issuename=<?php echo $r->name; ?>">
							<?php echo $r->name; ?>
						</a></h3>
				<small><?php echo $r->cover_date; ?></small>
			</li>
		<?php endforeach; ?>
		</ul>
		<a href="#" class="button">Ajouter à ma collection</a>
		<a href="#" class="button">Ajouter à ma wishlist</a>
	</div>
<?php endif; ?>