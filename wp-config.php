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
define('DB_NAME', 'wordpress_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^tUd`}nMrN-);:R8ptRIc4Ua*C~`A4-GYXEb4=z3nWmJBQuMGlV!}KNUv^[ny3(:');
define('SECURE_AUTH_KEY',  'gpV|$9h|0|^Cgzf}9;.a|xuWALh819Aoc;j~/3geV;6KsCV&/u6xad_},-KNdUr}');
define('LOGGED_IN_KEY',    ',c6p!nRk_W]|ZL3ZKfq-SP+QJTCmSyj- fy2{elCk|t)V]7Khb`4<&IaDFI2&(6E');
define('NONCE_KEY',        'Z%Fqub32v(VO9?TbhnPh-j$-}V>XrX+U$JoM:B]-AlfU4{VQTzX9[dB_}dwx;bpm');
define('AUTH_SALT',        'C@^^Y+@Hhm8+4~B{.f*#>z#^NAn/+DGK73]>CZ/;C^X@dn,L3]|yG#7_q-~=%O8[');
define('SECURE_AUTH_SALT', 'ADrJUVi2waZXl|9 xmO)H82~0,w+{*.axzXZ*5TXGI~0<_lTKQT4Y/CgvlaCKyQF');
define('LOGGED_IN_SALT',   'Y++5T4[sK&.Ku$c[oXTGZn9o)=SLE(-F!4XM+O@^JIinC,P*RTXZ@ITqZHq0lR> ');
define('NONCE_SALT',       'DCa%+zNYv_6IHA9Qb0/cf7PUaKoE+-=7!yT=N:@Oa?)7S]QkN[^h&G|@0[tkj:7D');

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

