<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(); ?></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <script type="text/javascript">
    	// Check if JavaScript is available
	    document.documentElement.className =
	       document.documentElement.className.replace("no-js","js");
	</script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="viewport">
		<header id="site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="logo-wrapper col-xs-12">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo("name"); ?>" alt="<?php echo get_bloginfo("name"); ?>" class="logo">
							<img src="<?php echo WP_THEME_URL; ?>/img/gamedev_stack_logo.png" title="<?php echo get_bloginfo("name"); ?>" alt="<?php echo get_bloginfo("name"); ?>">
						</a>
						<div class="blog-desc">
							<?php echo get_bloginfo('description'); ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="page-wrapper">
