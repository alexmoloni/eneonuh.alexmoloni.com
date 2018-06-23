<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 23-Jun-18
 * Time: 11:47
 */?>

<div class="product-wrap">

	<div class="product-image">
		<img src="<?= $product->images[0]->src; ?>" alt="">
	</div>
	<div class="row name-and-price-row">
		<h4 class="product-name"><?= $product->name; ?></h4>
		<h5 class="product-price"><?= $product->price; ?>&nbsp;PLN</h5>
	</div>

	<div class="row buttons-row">
		<a class="btn-grey-txt product-link" href="<?= $product->permalink; ?>">Szczegóły</a>

		<!-- Show add to cart btn only if product is in stock, else show sold out label-->
		<?php if ( $product->in_stock ) { ?>
			<a class="btn-pink product-add-to-cart" href="/?add-to-cart=<?= $product->id ?>">Do Koszyka</a>

		<?php } else { ?>
			<span class="product-sold-out">Wyprzedane</span>
		<?php } ?>
	</div>
</div>

