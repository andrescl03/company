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
define( 'DB_NAME', 'bd_wp_company' );

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
define( 'AUTH_KEY',         '9L V#:9|,g=Eq)4A3&6!yM[ivA;;Jt2CekCmcf F:cKvyw Z185W?~)y$OR|R@^!' );
define( 'SECURE_AUTH_KEY',  'Qc3cZG*3c`D;|ueg-,eDTrty9$I=<`s{Vqi[So2v%R>^=Tb!<B@m>uzWr}xJx$4}' );
define( 'LOGGED_IN_KEY',    'Slpe2tmAcq<+|C6$lbU{v::*hDZ{+Uc],2i1&;}<Q%^th(/` h}vGl)}Bp14VLV<' );
define( 'NONCE_KEY',        '!Damz~B<d>QNjh9];4,#Z`#P5Ynwnop1dk9Kzb6*29:t!BCyoyR|Tj4JK<a<7~Ym' );
define( 'AUTH_SALT',        'y-vOrC!8nVq`Qq`n>il%^dk}zIPQMjYCFaDy;)aZZy*EC*2S*}A^@]2BT6YvH[ix' );
define( 'SECURE_AUTH_SALT', 'Y7quNv!19p/n&RYHg]Q[j_I;p3$j uNcWz|I%H8lGE/bkUn24mtmUwQ%p!.%liYy' );
define( 'LOGGED_IN_SALT',   'CkSCwCy[oSlMS1Ipd1UY[yUF91L(I?KT54-o8fQqDE~{V&zW,W}$=?Qjczk|,SUR' );
define( 'NONCE_SALT',       '%cgLeMDqKz)5At(lG~F;IcLd6GgN5hFy(9 p0qZa|tq^IUd>BbV*^DIxD1VQY6]^' );

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
