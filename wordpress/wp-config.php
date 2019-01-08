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
define('DB_NAME', 'gcgh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Pa$$w0rd');

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
define('AUTH_KEY',         'JaeI:rMcrdap6@JX-hLO_WGCpfGy*ws0&vJz3#jj(PyC|Dw&L;.SH|KM{?2[l,Ux');
define('SECURE_AUTH_KEY',  ')a)k:3]^ywahwy~BIDfOjO{D>?$YoqN5g@$[`NC{EfnHk8FF`uE_O2K(QL56v l[');
define('LOGGED_IN_KEY',    '(!$ t<@+Cry&?1@ANo%T5vaWS:1QaHbFMo,7mLqH^KeAEdlJ]V*m>_*CrSOcG-Vp');
define('NONCE_KEY',        'vU},vQip?Z`~A%teS`FeFQnbYN3$0Ue ,>]W{@/X7Mvzcn/%vo)uW:zms}x[D+HW');
define('AUTH_SALT',        'dWS(X6D6q;52L&;Zu6tXImS{Xxd%?L<wDIWNuS7FC85x]1<wRcLu_)^G-D)G 3|q');
define('SECURE_AUTH_SALT', 'p?}B:4I/K|HWIJuRhL7-BiCTuzC{JbG2LVBqcrJdPIYz{RI<~WLyg T(ZIB,06m&');
define('LOGGED_IN_SALT',   'koBj;`I72$^9v8&9WN;Zz#~#^;bPBxQGth4C}{u eLg*<O(:mxuayTzI/|BP(hZx');
define('NONCE_SALT',       'O,T^Ry/4,{8/,Uhl5p19:hQne`/^(h%fKPVOhqwWXri@$Z5MPW]%u`i~Mf-w YS:');

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
