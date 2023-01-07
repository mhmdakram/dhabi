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
define( 'DB_NAME', 'dhabidev_db2' );

/** MySQL database username */
define( 'DB_USER', 'dhabidev_db2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Triangle123#' );

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
define( 'AUTH_KEY',         'ihch+Z`9$$,Yx20 Y?)/n(9{o86txG#2b]iZ#q1kN=76><VehYyfw}%x|}ronZyU' );
define( 'SECURE_AUTH_KEY',  'e$gRbu]_nj/]lWGq835/3VLZi^+wf/K3H9Kw~_niSiCsjXl%:,2R8E,qF*%|(XXX' );
define( 'LOGGED_IN_KEY',    'CsHH^[]Bmtg*3xMI&P~TeYc6Yxu14*fco4Xk?|v ]SivU;~RQ^Z6K,j8VV.r0?WS' );
define( 'NONCE_KEY',        '~xWQ8eR)m.?k2]Ea 8* It([EakX)3L5wEQW/~%N/$z6d)AX [^vT&P^s?LHg>.f' );
define( 'AUTH_SALT',        'H-{u*R%x+fhqG~9TQum#*rLM^Zg_hKBF!PDA}K#8rX:QIG`pTH&}R;mS fzTcP{Q' );
define( 'SECURE_AUTH_SALT', 'ti]h)tP/}W>|H[BF)97Y$&>>4fC@=L}H,g8?<v(vgm6.qQshsHNB~df>QR>PBu,K' );
define( 'LOGGED_IN_SALT',   'qI{G_:A[_OUMPjjn:k-g@akB*(Z&xHafle80Wr$xJ#PN[q-t30TTk zrMDK.#(Qk' );
define( 'NONCE_SALT',       'YkZ|G8,R]8m:mYvXxTX}UQP[wS!(A`~;`8B Km;6nL49_*oXz#Mf<?Ib8iKh)3z]' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
