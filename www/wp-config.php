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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'unicluster');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '8q6hA1 3adFyuU4svIDGeZ&Z0o{$O(R%v*un+>8iL_1>w_clNf^Z03`M4ai!QVt.');
define('SECURE_AUTH_KEY',  'IorLx?u`ry6sz%0SY>4!^XiogD.9g%@,}8C=3@z&>%dQWVpP&s:;0CCB.dS<Tbc1');
define('LOGGED_IN_KEY',    '7H}%ISlRCU.FlcMxU(|ZiNSI7w(1urL YGJ VR-jYo|Pg&:SCP%<N/i~B%{{^6q+');
define('NONCE_KEY',        'r7v`y,X.HELk=!VXGLM^4f{.AB&|cC}&;D$_i}1Gaxs)Hm/oqL)tIpAGi`YfZ>lv');
define('AUTH_SALT',        'L]B<Z=5g6u1~a(noZTVrUok[$%Usq^`N!O58V*[5E{3s:hz4jQ_j4WOxYI#B3;9L');
define('SECURE_AUTH_SALT', 'v:%M_( Bh1N#dg/@*I.eq]NOm%R:`:gf7uo&Y.1HeTx<r-N/GX#UsuBeP>n+XwtW');
define('LOGGED_IN_SALT',   '#:nb@:/<TQAr~AI-B-Q~N^m}V@hk?aa1lf=Ye/y6? l/>)M4jNuMasnyAbR1;$IC');
define('NONCE_SALT',       '.~^+XDgN>Q]*i4g?ZTd%7|V=$^KJ3I7C#|1a8y*W0nGLKxTNzp<#w/FI4FYf)?8p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
