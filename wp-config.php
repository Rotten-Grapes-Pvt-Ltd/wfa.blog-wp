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
define( 'DB_HOST', 'wfa-blog.cxx7ki9k7ihm.eu-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         ']D5>~$C!0)p)G>OiunoS;_*.X&4I}Q^,rNr@.:6Xj7-ZNWW:;{l#eA.h0QtM$hpE' );
define( 'SECURE_AUTH_KEY',  'B4oOBZ436!%Qmsiexk>v7oL22Cx)mmt&8FcFsf.9`_=NXQB9gLhy<aF^gz->JF=3' );
define( 'LOGGED_IN_KEY',    'aD-6K{~j4*/ O>|R@1nVmLVb j|-aZirT=D=ydXHCd]/a?]lkl>4O&J}{-y`V1Yn' );
define( 'NONCE_KEY',        '+`OGV)+o&SZlLNWy3e%]3Mc,R!,hUhwueswp{B>w)NeEq]d@nVgZ_Y]7a!ukTp=}' );
define( 'AUTH_SALT',        'B|%Dul.t%AHPlPU-{AW8kl!b|$yci?Y 645]Gn:Ltz=mt:Q;!Rgdu%KQ$}b/4/mu' );
define( 'SECURE_AUTH_SALT', '?B6zX()>Y^W}TfK3:4VN=-:xHf`%Hb9^gpNuYe?MJ-Wgn2tSJ+o7`i%=Xy9;$Ii3' );
define( 'LOGGED_IN_SALT',   'GjPeA}:HE:rgJH4QEf0XsHoo`ve0R9mvph{alb<QMD-yP~.PA<a>[B4q8_y,>F<1' );
define( 'NONCE_SALT',       'Sf*hhg_x{B0/85D)4{#+9F=_+D3U|{3`lIm66gxBJeOO1o`Fi_B8lSR,MF*`oL1)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wfa_';

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
