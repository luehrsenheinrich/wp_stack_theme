<?php
get_header();
?>

<div class="container content-container">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();

		if( has_post_thumbnail() ):
	?>
		<div class="row">
			<div class="col-xs-12">
				<div class="the_thumbnail">
					<?php the_post_thumbnail('teaser_big'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="the_headline">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="the_content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>