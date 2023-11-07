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
define( 'DB_NAME', 'visa247' );

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
define( 'AUTH_KEY',         'hx}olbie4UJG[Qj$kBpJBJ8GTG ZBT-mJ@pxDy3n;LFH&-*X!y@[nJ}gDrv5!Tal' );
define( 'SECURE_AUTH_KEY',  '%&uS*^ wEIi32BZV[xV;07DYN.@u8jmX2!*I9N)f,0R~D,?Owddq`? #gb;1@oQF' );
define( 'LOGGED_IN_KEY',    '*4PK4b%%h^aK>|c?^>ybw:.D%UB:<9ZRM6qXZ##.LW>L@=QkL-NXG.n;7+(H@%Bd' );
define( 'NONCE_KEY',        'bESX.E/F(Z8]|nK---&UOW`g!:Dv=BggM>>4cS}zo %ulu@#KaC:{+/CAj81-j.j' );
define( 'AUTH_SALT',        'j^/}rG;nQc*5rzS0Iu9IYUe}yZU1+x<zhr4y8&/pcVhmw)$v7} e9vQjH%no])Zg' );
define( 'SECURE_AUTH_SALT', 'YEVdKh/=>`#=H]0RMn2deui5^$~4:9r2y|}rK2D_nTy<h:<rHw%,vT+,yYINym@#' );
define( 'LOGGED_IN_SALT',   '`!;e.v:iv*7$+hX@zRdn0mCL5`CjvqK1)}:HM<Rer#F6f)Z.0/kx_VwOQ&[#lL|8' );
define( 'NONCE_SALT',       'fT{nYwcvx8;d{gHxV^taFw}$bqEJzqGJJfsV|(T5%,sV=3YS=Xm}j2I.;Ne&Xf)Z' );

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
