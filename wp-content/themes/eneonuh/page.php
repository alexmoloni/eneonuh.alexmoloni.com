<?php
get_header();
?>
<section id="main">
    <div class="content">
	    <?php while ( have_posts() ) {
		    the_post(); ?>
            <h2><?php the_title() ?></h2>
            <div class="woocommerce-wrap"><?php the_content( 'more', true ) ?></div>
	    <?php } ?>
    </div>

</section>
<?php get_footer();
?>

