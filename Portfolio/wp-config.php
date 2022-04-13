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
define( 'DB_NAME', 'portt' );

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
define( 'AUTH_KEY',         'Bv|hl8HX%3V@AnXFRw28*AF5cn3-.b{ w(^:i##uzV7EGP6XZjw0dd/T2TP*Qon$' );
define( 'SECURE_AUTH_KEY',  'O9k1Epz&2Qj+~T6sJf.MPlc#Na.g]~u-~rH7JR[<Z~H)1$~dYn(<?]jY/[J!|,5S' );
define( 'LOGGED_IN_KEY',    'Xc{F`+@U86|+EAplp5QrSKK_.4gM.zjOBHN)_Ky>wGYP[}N/4qf_qV|r,emgg|O>' );
define( 'NONCE_KEY',        '@0~9IT!G~yEd[FGBzcT+Is^s-)LG7u<tSKQoaJ.d^{&?-(d~]3V^xl.nw&G(%M{^' );
define( 'AUTH_SALT',        'X~f:Fo)#l%nwTKT;?LoJMvy1sWHqXOF=gohdVsu Mf#a]`i[BMI?7r8)YfH?^lL4' );
define( 'SECURE_AUTH_SALT', '5gTxxczK:T4#XU`9ROBo(3gDhV]EZ;zVt&1$(%D,j)ot{v3d:|:74QZd.KEz0.]6' );
define( 'LOGGED_IN_SALT',   '.p..}{_m$Uh ACVjUP~{JQ ,tl&u$vB9.SG_[2wF*JMmZQ}X)-VX@g@=>Oi.&V0e' );
define( 'NONCE_SALT',       'dZ1(wQs4ztW3&,X,^,2gH.OZ@B:Vjopt5.n%+;yWE.G%Ar^7*z,W!1_mc:p/;@{a' );

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
