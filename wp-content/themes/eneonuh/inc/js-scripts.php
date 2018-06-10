<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 08-Jun-18
 * Time: 00:31
 */
// include custom jQuery
function customJs() {

	wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'customJs');