<?php
get_header();

$loop_terms = get_terms( array(
    'taxonomy' 		=> 'stacks',
    'hide_empty' 	=> false,
    'parent'		=> 0
) );
?>

<div class="container content-container">
	<div class="row">
		<div class="col-xs-12">
			<?php
				get_template_part("loops/loop", "stacks");
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>