<?php
	

?>
	
	<div class="row">
		<div class="col-xs-8">
			<?php
				while ( have_posts() ) : the_post();
					the_title();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				endwhile;
			?>
		</div>
		<div class="col-md-3 col-md-offset-1 hidden-xs hidden-sm">
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
		</div>
	</div>