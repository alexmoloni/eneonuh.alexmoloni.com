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

    <div class="content">

		<?php foreach ( $latest_products as $product ) { ?>
            <h4><?= $product->name; ?></h4>
            <h5><?= $product->price; ?></h5>
		<?php } ?>
    </div>

</section>
