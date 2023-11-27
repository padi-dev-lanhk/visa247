<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_USER', 'visa247_dev' );

/** Database password */
define( 'DB_PASSWORD', 'Visa247D!@YayqHXat@#$AQm4Cry22LM' );

/** Database hostname */
define( 'DB_HOST', '178.128.95.94' );

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
define( 'AUTH_KEY',         'hAsTra.||H~q^TA6nP7G?M3#yC0L?)~x^R7&1JY6Eigw c-qa}YUE&yn:}u9l$Jd' );
define( 'SECURE_AUTH_KEY',  'aMHu-8IN eDkfpw5)(@J+= PQlw6Ji(t!ro]eChfXR2;N0Tp%``*EkAO0*MEt%+Q' );
define( 'LOGGED_IN_KEY',    'WH=v8ZQbWFey T=3C{|QCz uks{gCj0MZ6MJ8vCP#.i$i&)9~t}E8%aB=c-JW0]7' );
define( 'NONCE_KEY',        'P]`h3B@`W(Dv`)jDX3X>)&V8!$C0L`A]@r?kUK=zGg2ch0)*VCpqzB-+LU9yWA:a' );
define( 'AUTH_SALT',        'Q/:pkW90?NWLaiB)=(Um`Y<b=u96%UJDXLLSPm!|@ ylDT{5?^H@;(C!U|+rc)gR' );
define( 'SECURE_AUTH_SALT', 'fI:@PV3Udd0MX=]w-k4dgPCN1.TfQUQ/8z1KALJ4>Tls-ztF=78W+v:u&f 5xf@9' );
define( 'LOGGED_IN_SALT',   '{=1/RW`Xhsun02ISrQiL,H:e`=b5Uflr6!UbX,}b{O&QIa-9:fAnI)qa4|)~x(bM' );
define( 'NONCE_SALT',       'Ub+cl-k21:hJuJRM+5b/x S{QG>3R~!4]GIFlFrotx(GwV!oq`(Oo#(v~ %,eWD!' );

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
define( 'WP_DEBUG', true );


define( 'WP_DEBUG_LOG', true );


define( 'WP_DEBUG_DISPLAY', false );


@ini_set( 'display_errors', 0 );

define( 'WP_AUTO_UPDATE_CORE', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
