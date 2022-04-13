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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ex[F;U_$#%lFhF:6L3+YuJmwy|{njnwVuo bTg*6!:JP2|E6=7:<z!,D.!d,Y<H7' );
define( 'SECURE_AUTH_KEY',  '&F6?Z9-b$o/MUv9PWQ5nS8:Y59OvY+`*61A !a0EQh4~n:pEhV4i}RW`v;kgM!=P' );
define( 'LOGGED_IN_KEY',    'd$@=G@3,y$_el=|U$VmaK})H6,||Pp8rzR-2:Urk66*sYYYlEJ+J4C+Wy.Satw4|' );
define( 'NONCE_KEY',        'P%Z@Z.oS|^<$NEq8VR7DIzjsctVDXDtUxL4_u[K??F)&#PmK)B[Q2G1^JQW~ORN@' );
define( 'AUTH_SALT',        'h M0b@~jAP3/E?EL)1$d9p?N45Ag8X8R)!|yFXyM?+lfJenT3(chYA;(Y&KH-y<+' );
define( 'SECURE_AUTH_SALT', 'q)@]~`}`TH|FDq._q(1m@=s_n.0LjvOyf/2m)9; M{.c<K!j`~wANoNHDn{!Gd&k' );
define( 'LOGGED_IN_SALT',   'Wp%XluP13!=9n~^kuYi$hs5[p#m@;uwz-P$iX<t[~EyJ*R{%8TY3N_Hj9l`RY33]' );
define( 'NONCE_SALT',       '(#x[R>zUhoM9.,<m!4&w.N:)D~iA>5| KKw:xb9,vBV=[H=]&<5HeBArMwq(U>Gb' );

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
