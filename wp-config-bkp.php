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
define( 'DB_NAME', 'wfa_blog' );

/** MySQL database username */
define( 'DB_USER', 'superuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'superpassword' );

/** MySQL hostname */
define( 'DB_HOST', '54.170.245.33' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c)7!$YQWByr#iP(Q0EOre--H,:,;*(W9[~|/=7FqmF^}3P9hA4hs(nLxGU/>0)tQ');
define('SECURE_AUTH_KEY',  '|bUfWKt_:h{h6(SxSg7|X+NQ,R--HpyL(S@<<p$2vMqdK9qG{a&@-zf7zPl=9>7}');
define('LOGGED_IN_KEY',    '3xBLqJ}U.E^@iM:lxnjCa#x9siunO2hOQ|/|k`BX=q0fy([|z`v}ECB~6[_{+}+,');
define('NONCE_KEY',        'K,*s-9c=E,r,@mBIv>.>xhs!v9m`%HW]86]#J@Q)eg6^eTcM?Il3p||$2%g$T7JU');
define('AUTH_SALT',        '7KM-,?W7Hl2RN,;S$fH3k$resvd@LU8.)8SjDSkSws-:A*Tz-sSRCCX<Wn`aG*g]');
define('SECURE_AUTH_SALT', 'Tp~ lZ[s.;<{Opad4|Zc_&O9VGsj&<+:wkm5q>.vF+q| YJ:tRO!]}=9cU$~/kk6');
define('LOGGED_IN_SALT',   '|S8Gn0|Bp2e~p.[*+QRYq)jR5b=K A=Kzf)F+nB[BCRuRY-511$8[V*?jWRRj|wL');
define('NONCE_SALT',       'L>9XQ>wllI22|Y;wsoP5V$SZFj?CW<Og_FEL#Q1rUFy&0x`uWTIOIoJFPswLUAEj');
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
