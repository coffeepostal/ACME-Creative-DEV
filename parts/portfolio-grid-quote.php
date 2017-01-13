<?php
	if ( get_sub_field('background_color') ):
		$background_color = 'class="portfolio-grid-' . get_sub_field('background_color') . '"';
	endif;
?>

<div id="portfolio-grid-quote" <?php echo $background_color; ?>>
	<div class="row">
		<div class="medium-12 columns">
<?php
	if( get_sub_field('quote') ):
		echo '			<div class="quote">';
		echo '				<div class="row">';
		echo '					<div class="medium-10 medium-centered columns">';
		echo "\n";
		echo '						<p class="quote">&ldquo;' . get_sub_field('quote') . '&rdquo;</p>';
		echo "\n";

		if( get_sub_field('attribution') ):
			echo '						<p class="attribution">&mdash;' . get_sub_field('attribution') . '</p>';
			echo "\n";
		endif;

		echo '					</div>';
		echo '				</div>';
		echo '			</div>';
	endif;
?>
		</div>
	</div>
</div>
