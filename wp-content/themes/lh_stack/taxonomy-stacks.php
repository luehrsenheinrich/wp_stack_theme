<?php
get_header(); ?>

<div class="container content-container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Taxonomy Name here</h1>
			<?php
				get_template_part("loops/loop", "stacks");
			?>
			<?php
				get_template_part("loops/loop");
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>