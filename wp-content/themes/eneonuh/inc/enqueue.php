<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 08-Jun-18
 * Time: 00:31
 */
// include custom jQuery
function enqueueJsAndCss() {

	wp_enqueue_style( 'main', get_template_directory_uri() .'/assets/css/dev/main.css' );
	wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/dev/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueueJsAndCss');