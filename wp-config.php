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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'greenguide' );

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
define( 'AUTH_KEY',         '*hlnA0{.[BJRw=3_y`e/+A]r5!lh[!(T}&N_/WIb(:_!$v(8P/%0t3=_fHNrTSC*' );
define( 'SECURE_AUTH_KEY',  '<Su~1QE4ZH <Spx]YP_QrR&B&*[T1x!Za}Y^El%O2{99G,]DI/8cGGQ6zgY%{oS^' );
define( 'LOGGED_IN_KEY',    'C7ZB{v6Sf}_@K7NQh^.5BjO4F!KWR%:Qr)IcEzSrT6,Lw|=ok8~o]4$f~hCD4<at' );
define( 'NONCE_KEY',        'zLVI;L6a2k}@S8BqjE.gHB*bqnhG%qlyP8Izmj8h#}b`4}cr3K+*BXUXQtbZ4QKU' );
define( 'AUTH_SALT',        'ry%0Xr6E|/c=In?$;a%JL(LxXn+<MD0CSum# u$]c7~rtfEsRT1&Pa@YMe$|ix2#' );
define( 'SECURE_AUTH_SALT', '{CMh+{B!$qfaXg|@9Le9l2C@oGY+V#/I,X9u9~_,Kxl)]@)jn(>,F@,z_P0l`#|%' );
define( 'LOGGED_IN_SALT',   'zV6DYmXpN^bDN =!dsa8zPXQIJE=kB(WCTBZ$)qL,hVFI2 i+]Dr]6Pa#>K;j.Le' );
define( 'NONCE_SALT',       '?%RlIQQ7NaI#LA5z-#^6jxI0&ly Z^$8YIN*@.J+EI#_wnp)0mp/J-Yo51%ZIzyy' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
