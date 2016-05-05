<?php
	$terms = get_terms( array(
	    'taxonomy' => 'stacks',
	    'hide_empty' => false,
	) );
?>
<div class="stacks-container">
	<?php
		foreach($terms as $t){
			echo '
			<div class="col-xs-4">
				<div class="stack-item">
					<a href="#" title="">
					'.$t->name.'
					</a>
				</div>
			</div>
			';
		}	
	?>
</div>