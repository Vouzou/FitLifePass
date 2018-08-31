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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Q&]Dc@3A[8dEGSelUOuM4C^!I@c@9D>l/2ldeg,#)`g~GX+u:p;*KEEh/Ol_^A0@');
define('SECURE_AUTH_KEY',  '?M<wvU~-!/W}S24C:::8n9p8QQ=veFt,[},84w,!_Lf/!i=ZHmT7=;8}}p*L3XGP');
define('LOGGED_IN_KEY',    '@JYriW;Qd4}y~6Au-^E6GKr<+DE%Eh#Awc|(Z)lI6~2C$_?)zapU]Wp][fy8pgM^');
define('NONCE_KEY',        '4J028%|/jRKq|/ZymCr+s}Wu|?+N[}Y}J/w.5ia9]YgC(u%ub]Wcsjx!b{H}$urO');
define('AUTH_SALT',        '_[/+}NaTW%hfK08ok[cXgs KIC0zxNotk}<8CkU*^FFJLKl7Ti$%hz(h1dJv|iI}');
define('SECURE_AUTH_SALT', 'rfzn[)</}?g-?FKkx<|9k8g]1DZn!5F={5mEh74Fy}0hn<w:w},*J&9OI9{N@%Q^');
define('LOGGED_IN_SALT',   '|3xHDs}5:mN+!!~ouB.>={5AnJm2)`4{+ad*_f~L(!G^qwz}33(q]^i^r!.zy#i(');
define('NONCE_SALT',       'spG%R=xnwn2FPM5QF1:]2x|RbWLvw*[FDGK?HXII;){i8x|M,s@d<_eBYbbaoHup');

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
