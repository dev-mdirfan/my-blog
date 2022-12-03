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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'Ixj9blXAyxI~OBw>{GDlC48|y$P SYK[!N:G6iOL7.UPLN8=/51W!9<Oc7BefwW/' );
define( 'SECURE_AUTH_KEY',  'S~k.Q#vCqOh^7lo<{KpO0i|6R}N<(2<U3lt6^ K!P!aB]0$!DdA$aR+Z/(Xpt5}X' );
define( 'LOGGED_IN_KEY',    '}{V6q=+qs8!o,refob}ly&#i(`Obd85bCaKf*v0PUg@iiS>&a(zqUV.)21A]T_yC' );
define( 'NONCE_KEY',        'hv/7q_y3Bn_9=XP)s5$zFN%w4dguN%duut}nPYhn9Ue+1_xEZ$RH!h9aq2jf0>4U' );
define( 'AUTH_SALT',        'fy~Fh,pEP3@jg%2.9ImE3r-y#(D(t{I1U,s2U0G7NeMzvE,B7jb4pj=|jexoCHV[' );
define( 'SECURE_AUTH_SALT', 'Y1r2Xc4|nS>Cz_SYZBG!E*-AOGjQ~48k>)/fD)jzVqs#.4-lh9^vew+lP6~BA7<h' );
define( 'LOGGED_IN_SALT',   ']:Wy9T<P7lNTZ^W`Se)H?An9Ok548*f8-9Jp={F<__mROd4xNT6T^eq^0hZVupXV' );
define( 'NONCE_SALT',       ';6dw9tQrIF_5.Qg<qqcFniLco(`jQ^{oD!_W`rw muL)2*LpD?BzPs)wI#El&3<G' );

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
