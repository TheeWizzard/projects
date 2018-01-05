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
define('DB_NAME', 'thewizzardstudio_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q<s| e8b~?=s$2{tJN?R_(@L1EuT5 v&;U~4WFfi!8RI{Pm:0CLuomQ5^T,lndAO');
define('SECURE_AUTH_KEY',  'OTQopVF7K`b?Kbw%<2_BnXIwkxW;YF>x/MeiSQ,m#iwOFyp?f&@e4gX7khs wl9r');
define('LOGGED_IN_KEY',    'n-zp&YOEc@D+j{?f)w].e;T7)c/ey}/iu3.#]MwCQ?FRJuD{4QF.c$e=;+}:9l]E');
define('NONCE_KEY',        '-g#bA[EV>k{2L:)Mld>.j=]~xwGWBaj=R(|uc+_g:9veX!BbJ2*M#p3<<RejOVnN');
define('AUTH_SALT',        '^tJ])kH0DHry5kXf3%V.]Y}%7I>j#ho$a&M} T{rvlrLS3$ &CX<*v{tdfEw{w/8');
define('SECURE_AUTH_SALT', 'w}IgHFV)B_HypJ{5e-rFgp11W6oB&A:.8o,3glPw}u g{Q9sMUXl3S81i1^E6Z|]');
define('LOGGED_IN_SALT',   '*G,ZS&Kd $7,27u}WxugT3^}#c Jw6uooJNR|MuU%ai$e|dRpT~zwSH9`Q_m%ZxV');
define('NONCE_SALT',       '`l}mL^y^>oU&uu6[21T?]6d:e,z>0})K6~ucr#JD/l3L^wKcpL1]{4J`mJb~-nM*');

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
