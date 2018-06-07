<?php
get_header();

while( have_posts() ) {
	the_post();?>
	<h2><?php the_title() ?></h2>
	<p><?php the_content('more', true) ?></p>
<?php }
get_footer();
?>