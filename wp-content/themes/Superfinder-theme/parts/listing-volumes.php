<?php if ($res) : ?>
	<a href="index.php"> - Retourner en arrière</a>
	<div id="listing-volumes" class="row">
		<ul class="small-block-grid-1 large-block-grid-2 list-volumes">
			<?php
				// J'affiche mes articles
				foreach($res as $r) :
			?>
			<li class="volume">
				<section class="row">
                    <div class="container"><img src="<?php echo $r->image->thumb_url; ?>" alt="" class="small-3 columns"></div>
					<div class="columns small-9">
						<h3>
							<a href="?volume=<?php echo $r->id; ?>&amp;volumename=<?php echo $r->name; ?>">
								<?php echo $r->name; ?>
							</a>
						</h3>

						<p>Année de parution : <strong><?php echo $r->start_year; ?></strong></p>

                        <p>Nombre de tomes : <strong><?php echo $r->count_of_issues; ?></strong></p>

                        <p>Publisher : <strong><?php echo $r->publisher->name; ?></strong></p>						
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