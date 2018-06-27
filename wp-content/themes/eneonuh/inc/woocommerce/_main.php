<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 27-Jun-18
 * Time: 07:19
 */

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


add_action( 'woocommerce_before_main_content', 'my_theme_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'my_theme_wrapper_end', 10 );

function my_theme_wrapper_start() {
	echo '
<section id="main">
<div class="content">';
}

function my_theme_wrapper_end() {
	echo '
</div>
</section>';
}

