<?php
	

?>
	
	<div class="row">
		<div class="col-xs-8">
			<?php
				while ( have_posts() ) : the_post();
					the_title();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				endwhile;
			?>
		</div>
		<div class="col-md-3 col-md-offset-1 hidden-xs hidden-sm">
			menu here
		</div>
	</div>