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
define( 'DB_NAME', 'wp_dev' );

/** MySQL database username */
define( 'DB_USER', 'keepitsimple' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'OqH)dCwt,=b*z25$dUrx)xG0L$O3;uX%p<*SUBAagu(:gQg/CtDc=wb{ITUW+>Gi' );
define( 'SECURE_AUTH_KEY',  'IkA+`8km(AgG5i]>kv*<XRGhue~5+y!rpVqAg1Sxr?%Mnix_pTa]smZx=Y.-FbTt' );
define( 'LOGGED_IN_KEY',    '>ih(W@^gq,tWz~GR/51Psgohzbdh[hK?Bcf-<&]1]vCFk3NWzA{1-ju5Lu%#4e9l' );
define( 'NONCE_KEY',        '5/L[9RFsTRInLh`N7A9B)^9QXJkZs1MKwls@v+A6ungk2hd]T8u@RjS$,z|2mzu=' );
define( 'AUTH_SALT',        '%&Zz(Hl,o%QSvdkQo,_wvUY.L&j. ?I*u0n(IDFmNls:s/Nc)0C 3-WKr4DKS1{x' );
define( 'SECURE_AUTH_SALT', '>kCF7&/gx-)UwYod8^3dDq!h9<Wg8PAMg8;zbQ`1I=9DJlQ;z*tiVZ!5zdx1bw)^' );
define( 'LOGGED_IN_SALT',   'Orkh}t]]Q%,hWfE2b,N]&O,nEsQXO;P2NOQ2w)-^sY1R}Jyh;|cPRT#5yk3407<_' );
define( 'NONCE_SALT',       'sBxKxTF2!}0^TE!L`EJdm6!CID8K?okBYo{7}Xl^`F;AN5I]}#jso3y$~@uV;+>l' );

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
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', true);
define( 'WP_DEBUG_LOG', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
