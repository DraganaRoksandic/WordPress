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
define( 'DB_NAME', 'droksandic_digitel' );

/** Database username */
define( 'DB_USER', 'droksandic_digitelKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'Toblerone91' );

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
define( 'AUTH_KEY',         ';FA:XbgB{wzk[jf]_&;+VDC9G:+abrVN48IPiM/y+oRu7)`?5?2%H53#DHk?+5kk' );
define( 'SECURE_AUTH_KEY',  'm!?Hm{6srfo9};ff]kO9IFI1da&~zv_,SX%HftuTVws;|:[C!+xPW3r!Rho$ivxg' );
define( 'LOGGED_IN_KEY',    'x>LItt2t@_XrPg-ihraeX;#6gMMdo=%GA.h5Z*RP4tJsqhQr1.44TjL`bf0)y42H' );
define( 'NONCE_KEY',        '-`^Tn7o@d5A:t`H5m:bt8f=w*rcW/@(Zu-qt S.l^DZ6Z)Y$$e rb%D0#<t6p7.+' );
define( 'AUTH_SALT',        'Q8Ynqcj>_c(W2!QNInt$r06&RCWloXw(@=-@k+4jewi.,]kYhQF[sw-8K|l0S%B|' );
define( 'SECURE_AUTH_SALT', '(PN#m?&7%^ fUp4dCd/iy.jJ>zUcPLh*JOY{5Sdmy))b&0tovrpDIQ?c;7X^%A|<' );
define( 'LOGGED_IN_SALT',   '-H-{]zkPSDSDbgahiS@SYG,{Jjg,!i{7`F`K8($tK&_l+hs1HjO{gh!h)7 f%1Sk' );
define( 'NONCE_SALT',       '|t>|&{rn:QoD$NHGE,|>&uA&Aqb~=u,|jP-i`PrG.@nOa:_IAl?iEp9X!`xASSH6' );

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
