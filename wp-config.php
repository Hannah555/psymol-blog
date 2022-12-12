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
define( 'DB_NAME', 'psymov_data' );

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
define( 'AUTH_KEY',         ':%8{AiGjP8Q54y?la5#ZzHX:.xfsg-fm]Uzo&sZ,oT]>n1{m$04,zZi~O,^;]8F%' );
define( 'SECURE_AUTH_KEY',  'Ra_X7=*iy=$] 7;>*dO@0AE WUm(QqR&21|K}*4$Xrjk gXH60jA&$xP~P_V2Keh' );
define( 'LOGGED_IN_KEY',    'iO*34Ct+wRX_Eq44Fw{8d>XA%!Ys.dSFCUwL)x@_P+Mw/_~M4SY1~h*ru{v0e1tn' );
define( 'NONCE_KEY',        '2IZ ^^%W5<cMh? >a%D,SNOIKVjX+IhB-|emxYoxBY(-Jkz-T&pR`V{EizO4}~ Y' );
define( 'AUTH_SALT',        'p-H,h4K<7Om&~0tK9k*WQPYBHN&?c?jqZ$FE}6NB%EY^>Af%gB|[>D+=;:~m,H14' );
define( 'SECURE_AUTH_SALT', '?vU`pLn{avT^hsK,S;l*C!&Xnn7|/(Lz6KI~(6#h|14$cb7p`+|:FOWaOl<=Z5w&' );
define( 'LOGGED_IN_SALT',   '`HO4!7WSg@0hcf^^2ZjdU8~Y%yF|@z45UhrX=!xAgrSG4P|$t%:~^/,A2Gx^.Z{)' );
define( 'NONCE_SALT',       '=d+k4,XTy~ADtJPPV%8<E!^O>]M>;9T$TUGrzHR7h)PV-wFyM{>u~5vl9Kz%QPCV' );

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
