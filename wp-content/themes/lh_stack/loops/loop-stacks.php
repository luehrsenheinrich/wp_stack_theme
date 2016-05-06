<?php
	global $loop_terms;
	
	if(is_array($loop_terms) && count($loop_terms) > 0):
	
	?>
<div class="stacks-container clearfix">
	<div class="row">
	<?php
		foreach($loop_terms as $t){
			?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="stack-item">
					<a href="<?php echo get_term_link($t->term_id, 'stacks') ?>" title="<?php echo esc_attr($t->name); ?>">
						<span>
							<?php echo esc_attr($t->name); ?>
						</span>
					</a>
				</div>
			</div>
		<?php
		}	
	?>
	</div>
</div>

<?php
	endif;
?>