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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'azzam' );

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
define( 'AUTH_KEY',         'HTt;$@_)+zGU#@-e8c>]lH@,QmY4Ni=BJto h!#Op|uV8$~slk`m@8w@Di9*$n;P' );
define( 'SECURE_AUTH_KEY',  '0I/Pf^FNPIMqQ&,ArP6^qB<im2p=Z!rxaQt}i#oT^Fc]DA[Sbq 11,Itasy^PceU' );
define( 'LOGGED_IN_KEY',    'YKSu)Z-$Sq2?n#+/ 4EG6_ZiODU$jqZ+1#StV#tl2ujLTQ?&>EC-f5[&#b]D_Sw%' );
define( 'NONCE_KEY',        'aK0aO%%P@0rNKM/%2-^fc+(={U$*PltjvSQul^al~c[V#JN9k=rt8&1&tIpSdi7^' );
define( 'AUTH_SALT',        'f*Lo}U6SAr~6)-RYb>r(uYz-u8{y3/Hd<$ANe%U+[Mkj>mvsTd$F-65,jI}$|[^C' );
define( 'SECURE_AUTH_SALT', 'K}9-7e1Muh`=Ff-3yf*&|:h#[ERyjl9I+tD!)YaD(;6HGBO=JZhNXC83R!tjW4X<' );
define( 'LOGGED_IN_SALT',   '*-^$x*{MW6k-OYaDzcJ9ywcn+%* z-/8-V8.Ww.)mUzmoUg3,-,a=x>lFY M(m&I' );
define( 'NONCE_SALT',       '$}QIxII5(oA)[B_q*#W/moWLOR:O@Lhx}^<yCIr.M-uTO&XQSXc7p)[nLXk@W0#S' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
