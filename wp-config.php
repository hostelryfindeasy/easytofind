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
define( 'DB_NAME', 'easytofind_db' );

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
define( 'AUTH_KEY',         'VRl:`V{xw.P$W8C#+U.c?q?k0t]+v33NVVLS-z20oc!Z(H))oqX,5YVe[zUfKFuo' );
define( 'SECURE_AUTH_KEY',  'c+.o]Q![EaT].,^ ]O.*}*@Hn#TxL0%2f(<|y:&v%^u`-OsauK.E4y2L([VA;PS>' );
define( 'LOGGED_IN_KEY',    '7GZiX[F8!TZDmZ,/|xJ&7o6B@EF7K`l2c6l!T<.ur+baDP5/rSxM*#/K .?,lvq`' );
define( 'NONCE_KEY',        'jyQnDdJ-b[]Yi%BLEG-,04kB72M*Z7TO345=pYSUH0zO`TWb1#tNw#.)3;&7Ay<5' );
define( 'AUTH_SALT',        'i{`]=:}VkyN6v4+UT7hW- )vAlu^JtV136q{Q>oW-0J]=hEJu!;pt>XPp_5fIOM?' );
define( 'SECURE_AUTH_SALT', '{DTps4.CnIp*!WAF(&&bt7`uMy!,$XsJ-ph{mEWxx:7#x%t{3$cO- )o9[t2[cI*' );
define( 'LOGGED_IN_SALT',   'q%;+OP]nL<GO7F3B+8Q^UT:,Q9yQw<m6}.D0a!IIVlC fkN^MF47*u9s@Q]<4Ol6' );
define( 'NONCE_SALT',       ';k]t-b)9Nr!T)3{G58b&Wn`w9r?[4#d=7`a:CJF?`7SJ|xDoI]m02=c7?o3S$JT<' );

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
