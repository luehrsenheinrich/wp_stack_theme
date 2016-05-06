<div class="row">
	<section class="col-xs-8">
		<?php
			while ( have_posts() ) : the_post(); ?>
				<article  class="item-container">
					<?php
						if(has_post_thumbnail()):
					?>
					<figure class="item-thumb">
						<?php
							the_post_thumbnail();
						?>
					</figure>
					<?php
						endif;
					?>
					<summary class="item-content">
						<h3 class="item-title">
							<?php the_title(); ?>
						</h3>
						<div class="the_excerpt">
							<?php the_excerpt(); ?>
						</div>
					</summary>
				</article>
		<?php
			endwhile;
		?>
	</section>
	<aside class="col-md-3 col-md-offset-1 hidden-xs hidden-sm">
		<?php
            /*
             * Call the main menu
             */

            $args = array(
                    "theme_location"    => "main-menu",
                    'menu_class'        => 'menu clearfix',
                    'container'         => 'nav',
                    'fallback_cb'       => false,
                    'depth'             => 1

            );
            wp_nav_menu($args);
        ?>
	</aside>
</div>