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
define( 'DB_NAME', 'droksandic_trpkovic' );

/** Database username */
define( 'DB_USER', 'droksandic_trpkovicKorisnik' );

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
define( 'AUTH_KEY',         '3*I=)G6;7.x=a@,dsc8Xf:BL$<x@c-FT`>UVj;#$TBpO4f8Ug?=`Z6]BqwxD=X(7' );
define( 'SECURE_AUTH_KEY',  'GA5nNc`4(]K#^c(7*fXLx$y,JL5AnRminEOLke_W@ge<Wyk(KLr_kz,4VbVxa}UK' );
define( 'LOGGED_IN_KEY',    'evK>>X3HYOl$437[-xl*My K7_p-yliXdWEe@`%QZunpjHEb]$;Z0W%npQvwM.Ab' );
define( 'NONCE_KEY',        'Vo[&ucT:&c e~klYisOAj@ai;G#H5CB(P[Pn1G> }dvtMU+N4}VA$du+({|0D3aP' );
define( 'AUTH_SALT',        'u$6TtUiro+FG7JA3RMzVaA.!qwz:5HRlA,dYRolS!LRPriUx@#Gf&B v;:h?5JW+' );
define( 'SECURE_AUTH_SALT', 'PiMTA@tNFb?MigI${d>&Hr.T_{>1@t4;H6th(asg/C7hMsDJc}x:xjLDVT3*xNvR' );
define( 'LOGGED_IN_SALT',   '1lBR.P7 7FKB*(zk@O+w?~=~k]J7*ZLH*L!T}#:20pbR9pWXDT@vqa(U7rVEQF4Z' );
define( 'NONCE_SALT',       'l5PhC(O1fJ$$aQ  fT1Xi^&=+:+Cj}xm@xFe^qblq&NgRgd{ /W?4{z*;kF%1CxH' );

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
