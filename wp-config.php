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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-p' );

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
define( 'AUTH_KEY',         '$$B3Ov.U~=i^w&)m3hL5h`+:s.p}n<9|n{M_oL2Jl<QrC{S{/)Yt[NOE|h.4Y[,a' );
define( 'SECURE_AUTH_KEY',  'V|Lg1FY1oyU4nv|h5SOZ$mbu6r&|&uE&song1hP/lRzA[U^|04nUpLugse p*Z[;' );
define( 'LOGGED_IN_KEY',    '+<P`kvKD;%zll)v!mXYnk%5l*i~k0cFMVAlJ-,>7Np-,^S!hkVa#0gJzT)Q @`}p' );
define( 'NONCE_KEY',        '+C+eIE[5{csLKOj]-q}UY}?OR=G udBW5?JrzLALm`}(%vytmD Y}yu8wksu0)-|' );
define( 'AUTH_SALT',        '^Sk3M6HMU4P<7XM5{w4koJ):n/s^PEI0J{$KtY*2j-0d#IA+H~d<Geq%+<.1y<2b' );
define( 'SECURE_AUTH_SALT', 'L~2UdO@#(e*2zBl^f[kw1^)54clf(goyLyKdY)jP^;Fn$;h`.Nfx$7p%*29QC*%P' );
define( 'LOGGED_IN_SALT',   'cu=XQ6qjbk@:aZe*85]:z(XL0Y$McwLF_)72G(Q6rjmjmR;k3gHT,:5<zF=y5hU1' );
define( 'NONCE_SALT',       'F0AAI|vU{zd0jFZ}!L(;j(;YCI+mUNKf|j{i.uj{2y@s&:G<BVFj5k<o}XKr.j*`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
