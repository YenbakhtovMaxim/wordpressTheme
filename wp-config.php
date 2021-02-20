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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'groot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'groot' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gO9Z^2ln3t<LfY^]G?*4BHC5.o#wsnS%T(u4|1kU*7b]_]J?P?$jHw[^k-W7;C_6' );
define( 'SECURE_AUTH_KEY',  '^o;~e# en5iy#7s VU<ccCuA22Mv8V|6Pz;}xmL^rV!bG7l+obGOh#-Hi{Llh/BP' );
define( 'LOGGED_IN_KEY',    'k Z,*M8>hyMt6Njhk)Pv>4:7RS`^D$F4uJE-*ZRuLtH]oNjmWS>h>/mL`?%k%ZXG' );
define( 'NONCE_KEY',        '+`:TY;8FG:[ZYvI_<V|I9@^~%fG1d@~R%Vv)i6{dTRg!c|?Nl9#kyh:Ut/1rw0JY' );
define( 'AUTH_SALT',        'y;/@k?Z)ow/8SPT7*?@[r!&y4[e-H@]@tiJE&6Af)]w2|zNX.72gw03&0%fyK}TA' );
define( 'SECURE_AUTH_SALT', 'QH*4jz.ziPm:U}qh ZF7Gu_ ,MROSI:t)qceJjd)(Vk`tB[!zzgA`I>>63vQAid@' );
define( 'LOGGED_IN_SALT',   '*;5R|c_?}GmQOzmL5rX//EmKe1y`)c7g&zrx4g~yapnVa~Lc#x.I$I!-l~s-mfu*' );
define( 'NONCE_SALT',       'GdyFol#XHX#N!]alyMfgJlE$0OD:IUG!wh91.qn=2YS>u2CQo6;0NK9rbUHU@mil' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
