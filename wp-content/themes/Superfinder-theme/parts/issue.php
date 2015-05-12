<?php if ($res) : ?>
<!--<div id="coverissue"></div> -->
<h4 class="h4issueinfo">Issue Information</h4>
	<div id="listing-issues" class="row"> <!-- GREEN -->
	
		<ul>
			<?php foreach($res as $r) : ?>
			<div class="large-4 columns" id="descriptionissue">
				<h2 class="h2issue">Name : <?php echo $r->name; ?></h3>
				<h4 class="h4issue">Volume : <?php echo $r->volume->name; ?></h4>
				<h4 class="h4issue">Issue number : <?php echo $r->issue_number; ?></h>
				<h4 class="h4issue">Cover Date : <?php echo $r->cover_date; ?></h4>
			</div>
			<div class="large-8 columns" id="issue">
				<a href="?issue=<?php echo $r->id; ?>">					
					<img class="issue_cover" src="<?php echo $r->image->small_url; ?>" alt="<?php echo $r->name; ?>">
				</a>
			</div>
			
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>