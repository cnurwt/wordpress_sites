<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_sites' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aMb8ep)K[y>`5&93IB (d69Pig,T4C8C0E4KUM%_|+kYbUJ#aFdD~!.4{+j+XL_V' );
define( 'SECURE_AUTH_KEY',  '>foNCg9}nu:X?Q[AI$RK{:5axAILG~!F{THB7u:7@O^#5_adI8nK<LyuS,_)HQ|^' );
define( 'LOGGED_IN_KEY',    ')yXC(jh0rb=?oL]&~b?*[W[B=.:bOOc&oW`[Zpu|&PpMU4BA)xbQ@(-.,n%Unj$~' );
define( 'NONCE_KEY',        '({#,lFVFBw.hQTM~fsc,h|g^0CF!QUukb:Z||(O`z{X!&yOfPfxB?Y:9w)3/%X*@' );
define( 'AUTH_SALT',        'kk6!-i880cGv_]:od]Ggq7RA0q22&]_d-&cY$i6^WHNooHR{!tdk&llz]KzdTc`e' );
define( 'SECURE_AUTH_SALT', 'ZbnHSW[n}?8~LI7:0vc3;asep|s3.~R50>:X{jOq-zs qq:D[O~g[>$.2aY^sqDN' );
define( 'LOGGED_IN_SALT',   't#I?#mw5)0,XRU$FcCStvj8xk);Rm;H3x fXb`i%!L/|{!Y|hTkj:Q:^gGs*/}x>' );
define( 'NONCE_SALT',       'Tad|(Bas5qvFA0S8~2wvY%$RKaRyY`1%Ce8d2ZMt_h2DY^&VZA;L9:@72bj0J$-B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
