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
define('DB_PASSWORD', 'apmsetup');

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
define('AUTH_KEY',         'llpvz9Abl7I:[<P3!<re@vgo&m}(. ,V[pfH1)7!FGXNGn%w1@0py`HN4F|>9m1O');
define('SECURE_AUTH_KEY',  '`r` d}]#nhco|LuwYO?S-N?2&vT{p3aX`2#GDebuZKLI)Vh9%!igP[rk,E?k<[NX');
define('LOGGED_IN_KEY',    'dqC 8s+L#36G-T_Pe@xXe-Lpwjgn0O#1+;M zafp2QK0BEMbrX!HC$KTGYPFyZC1');
define('NONCE_KEY',        'e47%)Kcy68(rBsVh/m>zL`C;A]RavIq/I+j{fGa `Ge8IldKM4Tx&Uc7eDW^|toV');
define('AUTH_SALT',        '053eE<MN*6G9`O{Qgzi^rhJ#u{2O]2=$@~~}aKaXY;UzC`s+*9o^!dBFk]aN{$]z');
define('SECURE_AUTH_SALT', '^T=|ZnqfxE{ks`_pR7Hdy6`(eC`~=iKUr8Szx8886Ajs:pCR?Za8lhI[F*6JP3N(');
define('LOGGED_IN_SALT',   '.1[P(Em.ko]s/85BzKUgg$X~zJ)RQHE-2A7yq_X#`QT2lkvHl(2zFI9Cy4RUGe~X');
define('NONCE_SALT',       ':`tbzhZ2m7L.F#!C2ZgRvT?s_JHiP+fxErzh9Jy>zfS/E&x|UYxRVs?SDXp4ayz[');

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
