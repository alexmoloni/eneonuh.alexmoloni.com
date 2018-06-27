<?php
/**
 * Template Name: Testing Template
 *
 * @package WordPress
 * @subpackage Ene Onuh
 */
get_header();


$args = [
	'limit' => 10,
	'orderby' => 'date',
	'order' => 'DESC',
	'return'               => 'ids',
];

$products = wc_get_products($args);

//print_r($products);

if($products) {

	do_action('woocommerce_before_shop_loop');

	woocommerce_product_loop_start();

	foreach($products as $featured_product) {

//		print_r($featured_product);
		$post_object = get_post($featured_product);
//		print_r($post_object);

		setup_postdata($GLOBALS['post'] =& $post_object);

		wc_get_template_part('content', 'product');

	}

	wp_reset_postdata();

	woocommerce_product_loop_end();


	do_action('woocommerce_after_shop_loop');
} else {
	do_action('woocommerce_no_products_found');
}

get_footer();