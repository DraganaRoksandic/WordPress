<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'droksandic_projekat' );

/** Database username */
define( 'DB_USER', 'droksandic_projekat' );

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
define( 'AUTH_KEY',         'Upm*&V>9>dW9y~p gJC>S@-KP0rRG{:1~HQc0J L#S)Vh.p)8+~e=HkFuj%8ZtIf' );
define( 'SECURE_AUTH_KEY',  'h_GG %Q>r^6AM3Y`J [Wc+B.hv)F#v;eH)K5Bza)R<pw4C%LOQTy5fkX(!.V&$Vk' );
define( 'LOGGED_IN_KEY',    'G:eI627tV6alvRL&AVl+OcM;VNH$E@w3KxTX_FTm1Pr/@xrHkD1<lk~&a_NT.7g[' );
define( 'NONCE_KEY',        'jWyyDt*$1D:`o{I2Zei`K`MJUE!k`/x0^-Q]1Z)U;s~)nHQgqlw:V|R6?9Cnffl~' );
define( 'AUTH_SALT',        'PWTj2I4q(T?ntf9Yz!XL%Q.rQQ^46DiL`im?CNXVe&J+,?pSgnn|b>v+ec)4~$;%' );
define( 'SECURE_AUTH_SALT', 'n1J%ki0?&[(Fx)ZkPPew0s/zHfUN0IB!3sk!8JO^~4AFz{EWSHb%: X58t[Z|]z-' );
define( 'LOGGED_IN_SALT',   'p=]W0eGyEQGU0S&`}:qerQ,BAYv:e6bfDNNqE`f|J_cpmG{q<!RQP}rfRf~lldTB' );
define( 'NONCE_SALT',       'o%s2<8kpwcL.OA,6F,aj~C_FU~_*y&`D+ >8.N=r6y|<b^%guSQnkf[]uj:~]&vB' );

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
