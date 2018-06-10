<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 08-Jun-18
 * Time: 00:16
 */
get_header();
?>

<h1>Front Page.php</h1>

<?php
use Automattic\WooCommerce\Client;

$woocommerce = new Client(
	'https://eneonuh.alexmoloni.com',
	'ck_419652ef94bd65f963e6af8f234960f61ba96b89',
	'cs_5f0a49a2a0c2f98358a7560485c141e65a1c9ef5',
	[
		'wp_api' => true,
		'version' => 'wc/v2'
	]
);
print_r($woocommerce->get('products'));
//print_r($woocommerce);
get_footer();