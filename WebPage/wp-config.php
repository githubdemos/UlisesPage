<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';PVyiM- !]vjyG<Ov=w}61P_mX5Y,Vdp-dg!?</1^e%fIWn4qmp$5j;+kaQNkhJ<');
define('SECURE_AUTH_KEY',  '3WA(+1yqP?DEhany*-|JkY=|E#!YMAtMdzOs-j,TgX14:A3)I%sS*tW0b*u?q9NR');
define('LOGGED_IN_KEY',    ')|6u7<aH%Q7$Et+zx;MVN}+O/Q?L.|YfDny|Z2@75^/#--)/*9;JsmT3jopsZ<3h');
define('NONCE_KEY',        'L[fA2y:;|u;+TGrWuGGOF(lYv5@gj=[ucE@@Zw|1L0I$_Pcax^DoR)lA_j-(XJNw');
define('AUTH_SALT',        'G0Z>hU+@<jQ~d4)2C#C6RFBr1n6{[X|cI[M^(5>!7v5*M]]MrYf +g}{,UqA/S5S');
define('SECURE_AUTH_SALT', 'J2r{I#2mji.-+k!+taI~|COzNBglG&K::v3t_<RgfS<&?lsxUdK[Rd,w*i_>Te41');
define('LOGGED_IN_SALT',   'e#POCvD)oBk)<:J7!x/lBS@*w6Kwc @*@@I&A,W!TK4`>^5EU|mpAVsG*-g[?=7#');
define('NONCE_SALT',       'il)AfRWQ$>ZQe%Rqu-TIcz-!$4*g;dyoo@wRoHqc}$$el:6pR<wN(.>SI@$-B%c&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
