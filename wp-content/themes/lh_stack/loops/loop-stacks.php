<div class="stacks-container">
	<?php
		global $loop_terms;
		
		foreach($loop_terms as $t){
			echo '
			<div class="col-xs-4">
				<div class="stack-item">
					<a href="'.get_term_link($t->term_id, 'stacks').'" title="">
						<span>
							'.$t->name.'
						</span>
					</a>
				</div>
			</div>
			';
		}	
	?>
</div>