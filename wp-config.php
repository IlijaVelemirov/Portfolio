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
define( 'DB_NAME', 'db_portfolio' );

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
define( 'AUTH_KEY',         'Q_,R1BVBb~2`n<o*$jkZCNG8jIhoM5W[.%X1;_=_PSF]2U9,f2bT1ETYzXgdT/NP' );
define( 'SECURE_AUTH_KEY',  'o hYXxiGNZ~H@rQ#}@~|~O9^;Dhf>A6M&p`=%e2`;CR!_pZV*.lIc[-wm+/CLnA)' );
define( 'LOGGED_IN_KEY',    'Ll</~FS+qrv9oPq2KP;%FK;1m#,AC%LC<9k|w6v^vp,siJ/Icx4y%3>[^.S;o-W?' );
define( 'NONCE_KEY',        'WYZ%z/?3+9,`rn*}p1K&~(+`YHwadOZLF`sl!$f@Tr5f ^2Ku9nKza^n5XAl)iVo' );
define( 'AUTH_SALT',        '^c9U-z,ay9~dQ8x&ZpuN8lY6FoL.i(+hy67l43*3rFy=f:|hAv8#vGX7O3]!(L1q' );
define( 'SECURE_AUTH_SALT', 'iw1}9o2N,M=zDIf0ep,3tzQ{J1TBm3Ctt?5Sr/6oZF2GWHk&yI#%;9M}:kw},s8r' );
define( 'LOGGED_IN_SALT',   ')[/]ri&BrSibtk+D)x~f:Tx?Q/4_K3AiT.:+EtBwEhxF4-{LI8$S-5Q9$&!cERMQ' );
define( 'NONCE_SALT',       '/9@wF)JLVpJMY;+95PJ:~QPeFQbw!kry/>9Hly]0m:K4cT%AKGId[Ko+*,RE5q:;' );

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
