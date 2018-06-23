<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 22-Jun-18
 * Time: 10:12
 */

$latest_products = $woocommerce->get( 'products', [
	'orderby'  => 'date',
	'per_page' => '4'
] );
?>

<section id="latest-products-section">

    <h2 class="section-title">Nowości</h2>
    <div class="content -desktop">
		<?php foreach ( $latest_products as $product ) {
			include( '_latest-products-product-wrap.php' );
		  } ?>
    </div>

    <div class="content -mobile">
	    <?php foreach ( $latest_products as $product ) {
		    include( '_latest-products-product-wrap.php' );
	    } ?>
    </div>

</section>
