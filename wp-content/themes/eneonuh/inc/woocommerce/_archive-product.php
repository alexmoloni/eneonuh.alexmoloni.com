<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 27-Jun-18
 * Time: 07:12
 */

//remove the <a> wrap from the product box
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

//add product-wrap class to product boxes
function add_product_box_class( $classes, $class, $postId ) {

	if ( get_post_type( $postId ) == "product" ) {
		$classes[] = "product-wrap";
	}

	return $classes;
}

add_filter( 'post_class', 'add_product_box_class', 50, 3 );

//wrap product image amd wrap price and title in a wrapper div.name-and-price-row
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

add_action( 'woocommerce_before_shop_loop_item_title', 'alex_wrap_product_thumbnail_start', 10 );

add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 15 );

add_action( 'woocommerce_before_shop_loop_item_title', 'alex_wrap_product_thumbnail_end', 20 );

function alex_wrap_product_thumbnail_start() {
	echo '<div class="product-image">';
}

//close div.product-image open div.name-and-price-row
function alex_wrap_product_thumbnail_end() {
	echo '</div><div class="row name-and-price-row">';
}


add_action( 'woocommerce_after_shop_loop_item_title', 'close_name_and_price_row', 20 );

//close div.name-and-price-row open div.name-and-price-row
function close_name_and_price_row() {
	global $product;

	echo sprintf(
		'</div>
<div class="row buttons-row">

<a class="btn-grey-txt product-link" href="%s">Szczegóły</a>',
		$product->get_permalink() );
}


add_action( 'woocommerce_after_shop_loop_item', 'close_buttons_row', 15 );

function close_buttons_row() {
	echo '</div>';
}

add_filter('woocommerce_loop_add_to_cart_link', 'show_out_of_stock_label', 10, 3);


function show_out_of_stock_label($add_to_cart_link, $product, $args) {
	if ($product->get_stock_status() == 'outofstock') {
		return '<span class="product-sold-out">Wyprzedane</span>';
	}

	else {
		return $add_to_cart_link;
	}
}
