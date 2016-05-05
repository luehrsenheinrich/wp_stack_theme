		</div><?php // page-wrapper ?>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="footer-menu">
						<?php
                        /*
                         * Call the footer menu
                         */

                        $args = array(
                                "theme_location"    => "footer-menu",
                                'menu_class'        => 'menu clearfix',
                                'container'         => 'nav',
                                'fallback_cb'       => false,
                                'depth'             => 1

                        );
                        wp_nav_menu($args);
                    ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="footer-logo">
						<p>GameDev Stack is a project by</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo("name"); ?>" alt="<?php echo get_bloginfo("name"); ?>" class="logo">
							<img src="<?php echo WP_THEME_URL; ?>/img/lh_logo_white.png" title="<?php echo get_bloginfo("name"); ?>" alt="<?php echo get_bloginfo("name"); ?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><?php // viewport ?>
<?php wp_footer(); ?>

</body>
</html>