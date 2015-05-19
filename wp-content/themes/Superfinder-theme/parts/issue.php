<?php if ($res) : ?>
	<div id="listing-issues" class="row">
		<ul class="small-block-grid-1" id="englobissue">
			<?php foreach($res as $r) : ?>
			<pre><?php // var_dump($r); ?></pre>
			<li class="issue-description">

				<!-- COVER ISSUE -->

				<img class="issue_cover_descr columns small-6" src="<?php echo $r->image->small_url; ?>" alt="<?php echo $r->name; ?>">


				<!-- DESCRIPTION ISSUE -->
				
				<h3>Nom : <a href="?issue=<?php echo $r->id; ?>&amp;issuename=<?php echo $r->name; ?>"> <?php echo $r->name; ?></a></h3>
				<br />
				<small><?php echo $r->cover_date; ?></small>
				<p> Volume : <a href="?volume=<?php echo $r->id; ?>&amp;volumename=<?php echo $r->name; ?>"><?php echo $r->volume->name; ?></a></p>
				<p>Publisher : <strong><?php echo $r->publisher->name; ?></strong></p>
				<p>Année de parution : <strong><?php echo $r->start_year; ?></strong></p>
			</li>
		<?php endforeach; ?>
		</ul>
		<a href="test" class="button addtolist" data-issue="<?= $_GET['issue'] ?>">Ajouter à ma collection</a>
	</div>
<?php endif; ?>