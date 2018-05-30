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
define('DB_NAME', 'cuesti_wpsite');

/** MySQL database username */
define('DB_USER', 'cuesti_wpadmin');

/** MySQL database password */
define('DB_PASSWORD', '79UICAFMB9');

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
define('AUTH_KEY',         '&8w6;+4hrBuz-iHo1-KB+K*2N4L_ZCH%eS[]qP?,7uYmD9:U0hj}s;{0RHnf?wLL');
define('SECURE_AUTH_KEY',  '.D[#^mT>W9E]3Ci$2}GvpDBJtk7it+HGeD*1mlTT,$l3z%Bq3r{b}^0W*fEtnmHW');
define('LOGGED_IN_KEY',    'Hy]2U;$P9fjn<(/0!@FJeHFu->iv)<:m&)*Mq3bOfU-$zM_ES^ ,RS|/0huKzI!Y');
define('NONCE_KEY',        'qvJIH[u]?U8RQ2ITlCh&:m)K8G3/17)}+!K<4/=}!)z=VF/lxl~cOeNImUGI)x0)');
define('AUTH_SALT',        'V!c!n(#+yKK6OyJkb(tQo7^O>dW]CkI`7OcfU0?n-4jzZ, QG@{Xxzgf_:J~ZrM:');
define('SECURE_AUTH_SALT', '7wct2-dW<Fo/ncfFFDrw55EL0iiaB}%2,06/k/Ov0GV{{_B>mnLgLp.{qJZ_NG|~');
define('LOGGED_IN_SALT',   'U:o>O.=P,B;oj]Q_*C-[7ii7D<]?+Z&)e>!C;?DLLK)uMIVz*|`4UpvU=10]@os{');
define('NONCE_SALT',       '?z!z$<b9RIBq[ rQ`j:BNv;UI3-,qi-j%#y!_:++Z0hy>voosq[=cgU*H8!K;H$b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cu_';

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
