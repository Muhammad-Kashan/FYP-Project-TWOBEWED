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
define( 'AUTH_KEY',         'x2dZ0ggw{RTfId40B 0z9H+7JP1+xg akk]E)lJ:dAL}NT0N[e7l(+TnED^59?[3' );
define( 'SECURE_AUTH_KEY',  '%bG(*+N]FEyn;~Mx9JAvvA[]6e/|Wc1 t$!ul0!k%[lL4~sWqa4JTwo@t!`G>fj;' );
define( 'LOGGED_IN_KEY',    '{;%PVmvyA/as>1{)m8:zFoy|#T7J~XL>7YDMrj9o`HUCG@vr$V?FrtY$^h1v?<qN' );
define( 'NONCE_KEY',        'AP>ua;ALaWdvo(z<Sn^tE0yi{7T96:lTUS_}8/$C<dm5*VI4] j!-^/2@MICn@4c' );
define( 'AUTH_SALT',        'p|5~.!?O:s(|w0,xL;]b}:Xr=Ne*Jx70IRi?^POgFWrW9]^61SW%rw!2?PoN$,._' );
define( 'SECURE_AUTH_SALT', '/8{MdkhMU2x$/ .kl=^=$7kWm3r0Y+_?lk,M1<?+*Y3OE!y,RRz[HsieY9o#I+#j' );
define( 'LOGGED_IN_SALT',   'PI0*=zC~:^ $+gYE0!F.Rqfj3WPPJ9s,Do,e=1s62[Ph*q,[&xXW;H]AeIXj2mH;' );
define( 'NONCE_SALT',       'GY7*(MdN]RB1O?!*M.lA)0{a!Z3fg< !e[h9b#:+tQWK8N?0x>9KMvKUu3OPg_ L' );

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
