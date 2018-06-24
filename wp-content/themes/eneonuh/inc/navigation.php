<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 10-Jun-18
 * Time: 19:37
 */
//add_theme_support('menus');

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu-help' => __( 'Footer Menu Help' ),
			'footer-menu-collections' => __( 'Footer Menu Collections' )
		)
	);
}
add_action( 'after_setup_theme', 'register_my_menus' );