<?php
get_header();
?>

<div class="container content-container">
	<?php ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="the_thumbnail">

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="the_headline">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="the_content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>