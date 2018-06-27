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

if (get_post_type($postId) == "product") {
	$classes[] = "product-wrap";
}
	return $classes;
}
add_filter( 'post_class', 'add_product_box_class', 50, 3 );

