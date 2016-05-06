<?php
	global $loop_terms;
	
	if(is_array($loop_terms) && count($loop_terms) > 0):
	
	?>
<div class="stacks-container clearfix">
	<?php
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

<?php
	endif;
?>