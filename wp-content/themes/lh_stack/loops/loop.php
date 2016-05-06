<div class="row">
	<section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<?php
			if( have_posts() ): while ( have_posts() ) : the_post(); 
			
			$url = ($stack_info['url'] == "" || $stack_info['url'] == null || $stack_info['url'] === 0) ? NULL : $stack_info['url'];
			$has_url = $url != null;
			$stack_info = (array) get_post_meta($post->ID, '_stack_info', true);
			?>
				<article  class="item-container clearfix">
					<?php
						if(has_post_thumbnail()):
					?>
					<figure class="item-thumb">
						<a href="<?php echo $stack_info['url']; ?>">
							<?php
							the_post_thumbnail();
							?>
							<div class="thumb-hover">
								<i class="fa fa-external-link" aria-hidden="true"></i>
							</div>
						</a>
					</figure>
					<?php
						endif;
					?>
					<summary class="item-content">
						<h3 class="item-title">
							<a href="<?php echo $stack_info['url']; ?>"><?php the_title(); ?></a>
						</h3>
						<div class="the_excerpt">
							<?php the_excerpt(); ?>
						</div>
					</summary>
				</article>
		<?php
			endwhile; else: 
		?>
			<article  class="item-container clearfix">
				<summary class="item-content">
						<h3 class="item-title">
							<?php _e("No links in this category yet!", LANG_NAMESPACE); ?>
						</h3>
				</summary>
			</article>
		<?php
			endif;	
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