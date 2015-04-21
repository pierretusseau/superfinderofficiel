<?php if ($res) : ?>
	<a href="index.php"> - Retourner en arrière</a>
	<div id="listing-volumes" class="row">
		<ul class="small-block-grid-2 list-volumes">
			<?php
				// J'affiche mes articles
				foreach($res as $r) :
			?>
			<li class="volume">
				<section class="row">
					<img src="<?php echo $r->image->thumb_url; ?>" alt="" class="small-3 columns">
					<div class="columns small-9">
						<h3>
							Nom :
							<a href="?volume=<?php echo $r->id; ?>&amp;volumename=<?php echo $r->name; ?>">
								<?php echo $r->name; ?>
							</a>
						</h3>

						<p>Année de parution : <?php echo $r->start_year; ?></p>

						<p>Nombre de tomes : <?php echo $r->count_of_issues; ?></p>

						<p>Publisher : <?php echo $r->publisher->name; ?></p>						
					</div>
				</section>
			</li>
			<?php endforeach; ?>
		</ul>

		<!-- // Listing des numéros //-->
		
		<a href="#" class="button">Page suivante</a>
		<a href="#" class="button">Page précédente</a>
		
	</div>
<?php endif; ?>