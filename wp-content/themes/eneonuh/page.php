<?php
get_header();
?>
<section id="main">
	<?php while ( have_posts() ) {
		the_post(); ?>
        <h2>This is a page</h2>
        <h2><?php the_title() ?></h2>
        <p><?php the_content( 'more', true ) ?></p>
	<?php } ?>
</section>
<?php get_footer();
?>

