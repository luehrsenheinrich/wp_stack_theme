<?php
	
$args = array( 'post_type' => 'stack-item', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
	the_title();
	echo '<div class="entry-content">';
	the_content();
	echo '</div>';
endwhile;

?>