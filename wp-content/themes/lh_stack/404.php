<?php
get_header();
?>

<div class="container content-container container-404">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<div class="the_headline">
				<h1>
				<?php _e("404 - Dead Link!", LANG_NAMESPACE); ?>
				</h1>
			</div>
			<div class="the_content">
				<?php _e("Noooooooo! You found a dead Link!", LANG_NAMESPACE); ?>
				<img src="<?php echo WP_THEME_URL ?>/img/dead-link.jpg" >
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>