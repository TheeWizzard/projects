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
//define('DB_NAME', 'thewizzard_dev');
define('DB_NAME', 'theme_unit_test');

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
define('AUTH_KEY',         'Op0wx:t,W)2ptTLoq&yT`IeFBf^_m.b`h[q|`X:nbTiD]iGO=9f8aq*A|}g8)jf!');
define('SECURE_AUTH_KEY',  '$kXvSu^Es?d//1`zD!p~qggkQCULov0@HHmw~U@a1UxqXs82A$3)krxQ*`ix7:m}');
define('LOGGED_IN_KEY',    'Sp{k/gO{ULq@5bK-6Id)FD)]By|1|MkWwVP$z8ML7?fU~fP@lox_[}BR^wWL$qET');
define('NONCE_KEY',        '}QWeK2bc[Creq;nQRSf<~]g(a|6Z^#VpxgqUFI*5D0|t(ZecIkbLV|:%ciyUBp<O');
define('AUTH_SALT',        'QR!/BDyd!Lu2:<R[sq@d@iI0.Dx+VPhN?8?x64O_S;Xr-R`=T x$Xu~3*:2QKI y');
define('SECURE_AUTH_SALT', 'AA.2_Nbv 6/rQrP9^I-UF~x_O,}Eh&> ($S$-BQ+4T4bl8TtKw)FHz+S2l?;lApX');
define('LOGGED_IN_SALT',   '%RKW?*VS6PSv<m7]Jy{%.ocv:  KY&mNF8Q}Cv_LV^9!3H9^`WJ1qv.|q08V,vFV');
define('NONCE_SALT',       '#<@`-:AhS|FZb,?=Db38h& vV9xTj.IP)lgn#;WeP+?TJRfVrmOirD_TMF&m_^}o');

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
