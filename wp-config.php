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
define( 'DB_NAME', 'droksandic_roman' );

/** Database username */
define( 'DB_USER', 'droksandic_roman' );

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
define( 'AUTH_KEY',         'c@y*%_?#5JSz,p%k$_D&e J+zeicRQAH-a?*G@c]Y;i%tBl84j{9[T-GAR=7^:te' );
define( 'SECURE_AUTH_KEY',  '*]P/?2n!f}v :W[K*gD#O3QmN2[)KhR.:bY`41T=?|`B.BSv]a{:gEOhN-bTvz(1' );
define( 'LOGGED_IN_KEY',    '`d<_/~)3bA13WP4~h,qW$eKQP]h[4)EaMA()lt 87/iQis]JM9|K-IZdZDaKfE4~' );
define( 'NONCE_KEY',        '1;EK-g$4O-SuMi&&wBQFx>lYIN~kuJgz#UC^m4X(EZMd<y)i6(%awF:|eg;o8lUE' );
define( 'AUTH_SALT',        'swg+HB&u/pmoT88yC1Z~!aCo_oOATNkWJ.vHp ynd7x_<n:K_X7MqqK+U1yI~DR&' );
define( 'SECURE_AUTH_SALT', 'yXVAr#Jb-=0=QN}0zO4!rH7i<R%|7pI|.)S&o=vu;Civ=(nS&FtTE<{?*(z>`8=n' );
define( 'LOGGED_IN_SALT',   '|Hyg/]fGAhUhPp~1HCu*KKgHiwX6?g4Z%-Z$Y&hv]jX,-:K7}!U+ .ulT^cRP_;D' );
define( 'NONCE_SALT',       '<W@,@w1:FQ)wL]Ft1~.?5b-%X]Rwrf<*#&ZW8 x,G4.WCvgPD(1M-yyk%gToVe[`' );

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
