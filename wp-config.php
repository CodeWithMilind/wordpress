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
define( 'DB_NAME', 'wordgit' );

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
define( 'AUTH_KEY',         'gmQ#X2.SSPB o LT&M#U5!Mf66lqMmrwW&6)PUpdcM-0Ay<x %N~M,M5=px6vOCL' );
define( 'SECURE_AUTH_KEY',  '2hm!UClZa({ /ETv:H?Bg[d;hR6yE.Xj_p(#S6lAie)uDC>Kt?)L9:IlH@^b[vq]' );
define( 'LOGGED_IN_KEY',    ',^:U vnH%jEFp.@gp*{|(5Z3@m7i{`]r0}H-0n}ALr4(o:?%g/26J ?PA4b@!iof' );
define( 'NONCE_KEY',        'hVSqU^ hHYLSrQ#(g/a=}I]RLq_qK8?y.W_X6FB[&e=cm/nR7sULm%J>Y1s9f/LH' );
define( 'AUTH_SALT',        '[s4EsLJwNbEJ|R*TDG@Y53v?EQC.JL{rV&G{qC=D<Q:tv!a f,u*>hb$C}g}(d|q' );
define( 'SECURE_AUTH_SALT', '4J-@:;kH8/uw]$H&j3K2Es=*]H&Q.7nUyil)h UIO4_~kIA+4.~qHTkJER[|/V]!' );
define( 'LOGGED_IN_SALT',   '[X`[ a|1Fk{(ND`U+,HUuhjM!@K I7I{A!Y_O_? kH)OboXVn OlpdEJT.ERqzqS' );
define( 'NONCE_SALT',       'WrrPb3w,g=vQH<M;K;f%QQ%0duV#0b0O}eaCg)%<e+,QPSJ_-b-wc;IkPbBl0.3R' );

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
