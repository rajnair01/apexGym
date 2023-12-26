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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T0J@&Z#0m),(8`l+8J.8+b26R`< uk6xIO}Bu.};1{k3kUyZ|@K6GA{2SZT`0[p_' );
define( 'SECURE_AUTH_KEY',   's`PJB=Fm&0PuvkV/P`!hMRBLh`2{T6|s!D<PiVYxEK-!<FN&SaAQ>EVbisVzeG?v' );
define( 'LOGGED_IN_KEY',     'Jjd 9wKKH{ACgd2>.T|aM]23U(_@MxVn@AwkLBqU-TDCr&{p-_OX$N.@$+qsaT S' );
define( 'NONCE_KEY',         'lfF7=v}^~;_hrrv$[Lq?/HuE^M9tt0jEh|B#_Gqo^k)`[,2KGMOivK>I|ak ~r6u' );
define( 'AUTH_SALT',         'D>k>U/mb|?oDbp7eExZ.*Ec#c6WYv5E<pHagX#7Yo3LA_!Nr@Y!&t{Y((%RO1Gc/' );
define( 'SECURE_AUTH_SALT',  'i%_%@szixu]#vFjPIE)3Up]/r:GoTOp*mjM83E/T33^Ky]=lkGlNxYqXOnhx5k#H' );
define( 'LOGGED_IN_SALT',    ' b43wim~d{{@nTS73mr:*E3o<;BF{(NP F*G:$w1E4e! $c[0bfO2b*YA/lvbtC/' );
define( 'NONCE_SALT',        '0u((Q|>~9JUg-]ps$QuoU)f+A1Sk#@D!eJzeK)QlEh)&Z/%Pb&dCb05o<nJn}@%.' );
define( 'WP_CACHE_KEY_SALT', 'g|6@]T6svtn|AQapBF.g;/#)A9Y)^g(<32lL7*hifot0|y]2JCRx3D.oqd$v]{c>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
