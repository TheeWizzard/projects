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
define('DB_NAME', 'hplussport_dev');

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
define('AUTH_KEY',         'Ua5l%[d_t6K.Re9U_{HIKT`u_ gqTu5Ag3r}E%(g|iwW*pdY<RG$Kn~c.Fnq{mW%');
define('SECURE_AUTH_KEY',  '@!JNZY9]Jg:s|V2WePTw4hwzIf.X)/Vg{vVVrxCsa+E4heKN}bNhos=yZb,K3=,J');
define('LOGGED_IN_KEY',    '1N<51*!}_p}EhhBG5,L=nUx0&mbujhFul/6/]M.,,EvUs#5+Lb>ahE_I/XRcg[_n');
define('NONCE_KEY',        ',08RC0s&E3r4&R-5-OV+0Nh?MKsq]xs{#L.9b/g2)W q}$QNd>)?fd8>g9AOzgMR');
define('AUTH_SALT',        'FO%gL]~(2E&@/;vqQMFLHZ%,8XT&ipoc6FjDqrKA5$2D2Zi,#EMD7,`lD}i7bCn@');
define('SECURE_AUTH_SALT', ',pJSRtab p[9LCk^iz<n+r}q*JL1l0H=^u1bfgn}0BeKsVX@1&1DS[4Z}l_43PrA');
define('LOGGED_IN_SALT',   'XdWKPuqWI/IZ&=$i7T]Emua 7>JS.VIn[(RR&[>_KiF6~u13q]i!o;n]wv&=A9O ');
define('NONCE_SALT',       'mLIwxzJ_Hbt>^{+Y:aXjC;8T;TdSks0(Owe,BMy> }D*A!6:Nf-t2r^rEzK]irPD');

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
