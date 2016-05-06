<?php
get_header();

$stack_info = (array) get_post_meta($post->ID, '_stack_info', true);

$url = ($stack_info['url'] == "" || $stack_info['url'] == null || $stack_info['url'] === 0) ? NULL : $stack_info['url'];
$has_url = $url != null;
?>

<div class="container content-container">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();

		if( has_post_thumbnail() ):
	?>
		<div class="row">
			<div class="col-xs-12">
				<div class="the_thumbnail">
					<?php
						echo $has_url ? '<a href="' . $url . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">' : null;
						the_post_thumbnail('teaser_big');
						echo $has_url ? '</a>' : null;
					?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="the_headline">
					<?php echo $has_url ? '<a href="' . $url . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">' : null; ?>
					<h1><?php the_title(); ?></h1>
					<?php echo $has_url ? '</a>' : null; ?>
				</div>
				<div class="the_content">
					<?php the_content(); ?>
				</div>

				<?php 
				if($has_url)
					echo '<a href="' . $url . '" alt="' . get_the_title() . '" title="' . get_the_title() . '" class="btn stack">' . get_the_title() . '</a>';
				?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>