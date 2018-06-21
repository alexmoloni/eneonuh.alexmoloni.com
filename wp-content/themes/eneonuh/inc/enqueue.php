<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 08-Jun-18
 * Time: 00:31
 */
// include custom jQuery
function enqueueJsAndCss() {

	//css gets placed in head
	wp_enqueue_style( 'main', get_template_directory_uri() .'/assets/css/dev/main.css' );

	//js gets placed at bottom of body
	wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/dev/main.js', array('jquery'), null, true);

	/*use slick from cdn for faster download and caching*/
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css' );

	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueueJsAndCss');