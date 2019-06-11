<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ns0015' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
/** define( 'DB_HOST', '//192.168.0.100' );**/

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
define( 'AUTH_KEY',         'F/BHh_K%P9/hiaFSIWu4P$IB-;Q)>&DY4soTBeW+5ktb&GxvTy%RKltzeui;G-qf' );
define( 'SECURE_AUTH_KEY',  'O _kd;h,((@CnQa |GWrKJK{=&+A^A`.!Qx5D(!7q9a>T=F/emg5=#~;i;Ee2sS!' );
define( 'LOGGED_IN_KEY',    '}u=.!u#HeSn0X+Yl1wx4xCmLLb^*vUl(H$D:R#eTUp7NK]?5lA0&0Vowng840W(I' );
define( 'NONCE_KEY',        ')vv(4/hI9mPxST<?V|N%g<|oI7YCu8p9 CBg5vvXAfg##/K*D:1RWw_@d}:d;h:P' );
define( 'AUTH_SALT',        'fO}zfu>EHO${^.F0M+[d?,UBK_|O7-dg[g-ac}PKt|U_%rH`.Umtc_C!*}F8WE[B' );
define( 'SECURE_AUTH_SALT', 'eJT<l]9,N9$cji55,cewNj@j]+NZ;#OQ }}^I}U2-*&}QZW{-i%@-,C@J3fG{t/c' );
define( 'LOGGED_IN_SALT',   'L/uqUK~fM:WU oi6z:BoTmY+>luVP#6]kazlt,;+G%GOycvO %*]3##Hbc.oYC5(' );
define( 'NONCE_SALT',       '#snQpATeF~Er;3slYt:jF#)oxsz8d=#Lm^ullCSM&sP&PfPe8ZW>q %]W0$[=0hB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
