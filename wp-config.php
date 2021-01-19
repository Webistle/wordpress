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
define( 'DB_NAME', 'Wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '52N#_WKaan)P#*6^HH2bnqV%(QcfCgk[mrtI-/I6y8#:f#,j}akc`!Tc.25FHhVh' );
define( 'SECURE_AUTH_KEY',  'sXrZI.a.j2QNUyA>DCgP<p{n6D)tAj:V+9b7z{A`s?D+rrYPT g4B=?Y=?[ABo5I' );
define( 'LOGGED_IN_KEY',    'QVD4DCEtLw<eT&O d6y<8/(/tn#mBw1188I4t^z: Xj:g`cfwE*I>:@JK|>3tB4L' );
define( 'NONCE_KEY',        '_qW8f~_37v2uzmJj@.Kju*S-mx[OC3Xs{39CjeYgpLnP:^ x) d]/Dn&,V#g?<VW' );
define( 'AUTH_SALT',        '!)Ei]S1U~5UrG8OFwsGIT;TEO_IigR1^0*w`_ .&~ln@TBU*7J05(T`>}/Bc0]8N' );
define( 'SECURE_AUTH_SALT', '>4_NBIF#zeh-D^UnT.CG:+.c9TGIeh>?c?V;|LT7-ES<}H IU~KiL!5&Xb5HM^bb' );
define( 'LOGGED_IN_SALT',   '$>RD.}r%oOhDoy1AD^*6N$<g6c6U{vmP;CABsZ.gvN)B)$CDit7ZJ>2b ,Ahzd>6' );
define( 'NONCE_SALT',       'dZ&{oM`+n*Gbg%,y[Cj[);O0Si;.Cm)ixU$:]X.3.(J.Bh9xTrX5p|GrxuF)?+({' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
