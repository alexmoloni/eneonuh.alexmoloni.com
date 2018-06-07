<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eneonuh_alexmoloni_com' );

/** MySQL database username */
define( 'DB_USER', 'eneonuh_alexmoloni_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ew7xcNT@%MzP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AqU%f0C1Z}vW+l})1Q8unFmo1WUz7W^n00JCfW#w$NX>4<XjIL1%-HDq_A-L&B[5' );
define( 'SECURE_AUTH_KEY',  'Fv;-1^sLG^+.2i975p=Hg?z=uFS{)y)w8-_k_(Pv`VFz,l3Sk>[;<M&w*9.XgsZV' );
define( 'LOGGED_IN_KEY',    'ZR.>u_QzoCiNN,1b3Bb  #q9JKU5=t_OX|pA5eA,<UC %jI3NQaMz.D$AFkAers2' );
define( 'NONCE_KEY',        'i|Gf|=!qqM;u#Il/<9si)aPd3Bz&O1S<CqFa1_M,hBC~!qw*G1f~#t+z9Vrd+`&@' );
define( 'AUTH_SALT',        'g-#@:M:U+Njtb64jD!y5}.*h?UTAFuv#4}5_yGl({~kX.7E1U.<;Ku*[.ZcI]^] ' );
define( 'SECURE_AUTH_SALT', 'f4LC]4UECGst/*;WP/JP7;cI&s-OYkm^v$|o]YzYT)hrMq+hY?m>9=sh.lI//`5x' );
define( 'LOGGED_IN_SALT',   'Swvxr?g9yo}}mB6&.SoFug1j3:v VLfN_^5HmIivg;OJ*!{>Q4f#I|o)aVssHN*e' );
define( 'NONCE_SALT',       'zL:Rr1M~V3,ghgAJKB_gb|!+oF) y$688#k.1Ou>nX<y29f4j~OA_=Q;5Ev/9<gA' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eneonuh_';


define('WP_DEBUG', true);
define('WP_AUTO_UPDATE_CORE', true);
define('DISALLOW_FILE_EDIT', true);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
