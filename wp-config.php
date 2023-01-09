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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u797571748_Vs1oP' );

/** Database username */
define( 'DB_USER', 'u797571748_AK2xn' );

/** Database password */
define( 'DB_PASSWORD', 'ytYxf6sGHw' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',7?m[}4Bhi9CMc2r @WG1z2u=+dqvA-!9[D&0^qW7JF#^m3f4~.j{>dpL8fr.yiF' );
define( 'SECURE_AUTH_KEY',   'HzB$:e$aIaHi1:6; -)h[s.[_Svmo9w_A|an/4NV#2uaDfe)sq[B+Yra}M;_8[l-' );
define( 'LOGGED_IN_KEY',     '&~z3Zn&c  %NW.*SF:tWs.E<N :>8KO/Mp4/-3TKw0R={0Zq$wQ!>|%uA*Vqb_)E' );
define( 'NONCE_KEY',         'LS`$a4;Qx}x@hX7z3>Hkl4,:2b`95}M?u[u +=|l}pm}`3rXx/IP4Ev/(!V>IfIG' );
define( 'AUTH_SALT',         'irN40TvcA8]y-A?Swxo6Au-_fV<xQPFnRRC^hz7}MFk+Rz_nEUys/!,4)nQ*3($P' );
define( 'SECURE_AUTH_SALT',  '2cgoUq7HLtAa12mt)4n@t73rUP8WOx87^xzMYjG%k+8ouHDvGVH0ATFk*,XHSi*X' );
define( 'LOGGED_IN_SALT',    '&N@Ko8t{,_BjS_bN9yj)/8HFUy I@?JOzP*+Is/x7-`U0)[|yO]QjSB_p Dk^aD%' );
define( 'NONCE_SALT',        '3<<}uchPS8vf#$|sC+kNFP_PsAC@Zj<Hu0$</CPjC!U nm_TCS4v*][xM,AE* a3' );
define( 'WP_CACHE_KEY_SALT', 'XWh0q/#k,cC~{{p=cyanw#1lEk4yT8tC`wTkB_)%AuA`7)M9z:Dcdpkp$IqxuUDW' );


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
	
define( 'WP_MEMORY_LIMIT', '256M' );
set_time_limit(300);

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
