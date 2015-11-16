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
define('DB_NAME', 'mysite_bd');

/** MySQL database username */
define('DB_USER', 'mysiteBdUser');

/** MySQL database password */
define('DB_PASSWORD', 'WvLyNTVtVfUmLqXP');

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
define('AUTH_KEY',         'ruC]1O+n+6L;NCs`cBB7nbT= m<V<N&~##Q)!Y+Z}W_)_odztt,TCEQfM)_w1&2R');
define('SECURE_AUTH_KEY',  's`w@2si(Bo]Ezyb)/?1frIY HZmO|b[(cX4A}F@U+C@2A{sVE-j}_]euq<SXUl1%');
define('LOGGED_IN_KEY',    'i$?3]|%$r2t27m=}|:)(*=<G@<RDf$J}!9-oOd&87+=:Fgj@QAbA~E|X .K)(O6-');
define('NONCE_KEY',        '/S/i&|<@x2u%sNw*yh`.}rV5WhFy+0uao{HFV!3Ox2~9@WDq/{X(-l0BTiJJ6M%6');
define('AUTH_SALT',        '^,6vEm;+n`)rVHW(_s09a~%:zTMA>A)QeKKe&JYQfFkHsbpfTNHT9OI^Np&QCJAP');
define('SECURE_AUTH_SALT', '!EJr`2hG2{G-rTL^cl%bx{ 343T/YT|7d;H6Gczxk8s.LaTYX;I`]Idr kDMDO8J');
define('LOGGED_IN_SALT',   '<JsIvZnWR*MWy^KA Gfrqs|g,iihv?9pi7h<mq<!1_02Q-=%8CEhClOSI_fA9g%f');
define('NONCE_SALT',       ',DLdsarL8G&4764HB-+s&5qGq<f+j@<+`0,+<W=bFLJ/P[O]o`*v`Z1SQVy /Yke');

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
