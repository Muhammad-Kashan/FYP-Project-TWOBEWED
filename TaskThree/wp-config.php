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
define( 'AUTH_KEY',         '!Yt2n^}Gz0o0_?U9z>=);@`X`{:mWfp(YF,d$<;W_9]Z&mv-vH&c&zE(0q;vRxLx' );
define( 'SECURE_AUTH_KEY',  'lABUn^LD%AI{a]]q61x>Z=}u!?j-jBPe,qFdWLSDSvzm-*PjU&XwI/@ZCAz?.re-' );
define( 'LOGGED_IN_KEY',    'h}DqWl2h 8#lvPxE3d{;s=ywM>gRH/Ec1*<Z?G=&lv*Lb`Y?WP #o_//fqs2-paC' );
define( 'NONCE_KEY',        '(m ga|[I~Lw]](T5-Y2gL{lhXZJXBl27GNA7uy%g@UdfDec!8xn9&Db,n<?jEt05' );
define( 'AUTH_SALT',        'mP{!.hvr8@z:t+uk*-71N4|L>$s]>b7Srq(s`xy7jD0DY$*I=p@E-mN09)=Kq,57' );
define( 'SECURE_AUTH_SALT', 'D!tBa_wlS9$tqN.;Uw8w3[Z>1>=:m;H| 85}TnvmM#YmE@cs#,sF^;EyXRN0ZAtA' );
define( 'LOGGED_IN_SALT',   'YHy`0tvcVZ#J+5^9Y*LOMS>bDU}>6QLg+PM7vtM{!9AFs?Tas_JQ`ns!P*)`tys7' );
define( 'NONCE_SALT',       'p1TsR&M$M{NA~Dp$vEp:aRg47~6PYMhr<&P~xU]:J%hirku~H(6<TaUE0aa-*&i7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
