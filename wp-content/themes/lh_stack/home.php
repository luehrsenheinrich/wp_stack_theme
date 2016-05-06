<?php
get_header();

$loop_terms = get_terms( array(
    'taxonomy' 		=> 'stacks',
    'hide_empty' 	=> false,
    'parent'		=> 0
) );
?>

<div class="container content-container">
	<div class="row">
		<div class="col-xs-12">
			<?php
				get_template_part("loops/loop", "stacks");
			?>
		</div>
	</div>
	<div class="row newsletter">
		<div class="col-xs-12">
			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="//gamedev-stack.us13.list-manage.com/subscribe/post?u=c049372423d90424b020095fb&amp;id=8948518951" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				<label for="mce-EMAIL">GameDev Stack newsletter: receive weekly updates about new links</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c049372423d90424b020095fb_8948518951" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>
			
			<!--End mc_embed_signup-->
		</div>
	</div>
</div>

<?php get_footer(); ?>


