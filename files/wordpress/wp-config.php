<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siglobaltask' );

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
define( 'AUTH_KEY',         'x[#:%vn&<|/,6z!cTg@eEsZB39tOTIaeaSBW!S3U;7=#7I9C`G9_f}{GI(K0t2]O' );
define( 'SECURE_AUTH_KEY',  '^xAgAFqcypk il}yt}0[}2xG`uc#{U;{.bE8-k8kOo!-7E4RjZp5[ipL/ouWY)_^' );
define( 'LOGGED_IN_KEY',    '-RZ3~/ieMGcUXN(x2(5i7:|VG0V=xhBZV26;{8.z]c=w2my!NvfAc8JlXiim8<T.' );
define( 'NONCE_KEY',        '[{4p2HD.[5r11}GW~0Y{iCe4%qYKB3fN]0nv6{IDO]S$#E@Q2_e#^SfCL!X0-{gP' );
define( 'AUTH_SALT',        'gLcrdT~H-NACO<A.#[gUdnZCz1{Y2x1mDP2f+EPT8@8E0}fK,foF,GA6!v+^{G.f' );
define( 'SECURE_AUTH_SALT', '`OZk)RcNz+odBl(y]cyyii.+z]DNT]5!.L%}p1<&WR&7tfSh_]cZ<a8sf2wS)l6i' );
define( 'LOGGED_IN_SALT',   '$lD(G8^1@1J)X[Sj@Oy+b-Wg?{}ra-x;/d9O,^Wm9qQc!?)<Y?98v1~fH/hu`aeS' );
define( 'NONCE_SALT',       '*[M$AhcVu7xb:L),C% $ENlZ*^adh=]p1e7Q!BQ!&cR(?RXPv8r=#ou#UF&NMaPC' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
