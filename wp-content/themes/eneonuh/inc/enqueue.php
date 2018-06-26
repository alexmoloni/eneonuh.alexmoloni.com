<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 08-Jun-18
 * Time: 00:31
 */
// include custom jQuery
function enqueueJsAndCss() {

	//load woocommerce after my own styles
	//first need to dequeue it
	wp_dequeue_style( 'woocommerce-general' );
	wp_dequeue_style( 'woocommerce-layout' );
	wp_dequeue_style( 'woocommerce-smallscreen' );

	wp_enqueue_style( 'reset', get_template_directory_uri() .'/assets/css/prod/reset.css' );

	//enqueue woocommerce after my own css
	wp_enqueue_style( 'woocommerce-general' );
	wp_enqueue_style( 'woocommerce-layout' );
	wp_enqueue_style( 'woocommerce-smallscreen' );

	//css gets placed in head
	wp_enqueue_style( 'main', get_template_directory_uri() .'/assets/css/dev/main.css' );

	//js gets placed at bottom of body
	wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/dev/main.js', array('jquery'), null, true);

	/*use slick from cdn for faster download and caching*/
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css' );

	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueueJsAndCss');


//Dont load woocommerce styles nor scripts on non-woocommerce pages
//Save bandwidth
function remove_woocommerce_styles_scripts() {
	if ( function_exists( 'is_woocommerce' ) ) {
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			# The styles
			wp_dequeue_style( 'woocommerce-general' );
			wp_dequeue_style( 'woocommerce-layout' );
			wp_dequeue_style( 'woocommerce-smallscreen' );

			# The scripts
			wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'woocommerce' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'remove_woocommerce_styles_scripts', 901 );
