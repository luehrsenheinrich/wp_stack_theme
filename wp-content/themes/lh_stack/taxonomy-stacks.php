<?php
	$this_term = get_queried_object();
	$loop_terms = get_terms( array(
    'taxonomy' 		=> 'stacks',
    'hide_empty' 	=> false,
    'parent'		=> $this_term->term_id,
	) );
	
get_header(); 
?>

<div class="container content-container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="tax-title"><?php echo $this_term->name; ?></h1>
			<div class="child-stacks clearfix">
			<?php
				get_template_part("loops/loop", "stacks");
			?>
			</div>
			<div class="stack-items clearfix">
			<?php
				get_template_part("loops/loop");
			?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>