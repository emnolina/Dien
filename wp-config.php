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
define('DB_NAME', 'DIEN');

/** MySQL database username */
define('DB_USER', 'DIEN');

/** MySQL database password */
define('DB_PASSWORD', 'EnisDienis1516');

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
define('AUTH_KEY',         '*sl7i;Nlp~Xm3EqLm5DYqSouCn&*X.Sf80MHdE&hcRP)a(O:K6u/?C #A?}hqrIO');
define('SECURE_AUTH_KEY',  '+bd$E%i=_PVe]<s9s{6/p,C CpT-lJuGsqJ7QGyILB8ttaX$BO:zZ=^$pohJ%^,p');
define('LOGGED_IN_KEY',    ':8T_QZ]C79UWUs?#loL3+G1U,O~?HA[<pv8Y~=2o._lc7PO*Iu|.7hBX.1t@8_)U');
define('NONCE_KEY',        '6u+)K{VBKCOBU;8Oey/Fdzfpk}LmHhmDC=&HCsKt>w)k{%M@r/,XT|=9H6T`Sp5@');
define('AUTH_SALT',        '^%O+~~{f@P*?2j#EbSInC&:*th} $.i6j{2)OI]G6D(c]{)4otFA6V[t<9B`n$75');
define('SECURE_AUTH_SALT', ';@OTU*8;XIb3I9zYk<sAS>qdi4M2:pTM|Aq_pykc0#WlB,b:b`2Ybx!H~rtwFUs0');
define('LOGGED_IN_SALT',   'aa>-mv_IA#DO{M{:T;WDD#(/Ka|U8}IVcd)k/}][r*GBkdUj>68e#2itTmVA`{T&');
define('NONCE_SALT',       'O.[;>2dEG5f&*([CPkTNakKfD.yr/Tdy4%i9i+Gi9h|y~4(V6JR3*t@#4A}3/rF;');

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
