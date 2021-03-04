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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         '}YZ&9j@3j_`>x/~G<Pksc*:oV0;)ojv~x NN+nD^hf{:gP#_Y,1AOF%#aHl`2+ab' );
define( 'SECURE_AUTH_KEY',  '_Y]ffE!/~U.dI0q*u,$1rgf0(ND6?7@r^sHwmB^iUSI0JK*R-sj.qdC?8tdb+r6A' );
define( 'LOGGED_IN_KEY',    'ns{@Hc#C(1Uz7C8j1?gH3LOIA)!O=7EJDrqnW$zwt^p._<}%oQ0tkqDuY8@:]g*H' );
define( 'NONCE_KEY',        'AV;UHU<Id[I0+2eo&=/7292.y{1V{2v+:z?[rC%:HG2wx@l8`VH[e8IpFsVz.FKP' );
define( 'AUTH_SALT',        'E{bV4)mNyx(yhx!ZS&cNxO5`h(x$2#3-LAy}-.q:y8],oXr/jGNy^h|{<l/1Ii5(' );
define( 'SECURE_AUTH_SALT', '0-7>v:54?$&GO[j$i7!)t?Ka*>fpF],{M4;u?eX%wyVu)}cz;{p<.TZ-!74%[Q|s' );
define( 'LOGGED_IN_SALT',   'RRP:U@?AgghP74wI<M4JQ$7?~|Ln~E/rQ(S^(h{GVf<{+?idUE0CA?wZ3SDaXmqF' );
define( 'NONCE_SALT',       '}6apj Qxkv<Xzmdc]+:W=~5&T*;}*|6W_j<cs?F68pB+].zk8z$T^IFR_]c2D:A]' );

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
