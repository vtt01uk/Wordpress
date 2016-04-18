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
define('DB_NAME', 'site_vincentt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         's]`bNLQnGMk~ jT`0:NqmyG{zte/p$c:z3vjt7F}hl:mE)T`~<WgPam^*.DAJ|6S');
define('SECURE_AUTH_KEY',  'tbyEz{G:JU4!LZp3(F7bW}|<m=q/g^:QGl{Y_/Z<;(;<u&e4/Bi}4Cwqc-B(Q3AM');
define('LOGGED_IN_KEY',    'NdrLuo_0*.EoLWI*nfL[GR;6DLX5rM%}-nEvH-kJxDpX^SA1+ -!m:E*C9w*6w!T');
define('NONCE_KEY',        '5j3Y?<V9@Yfwt+=ha[Z$,vh=XD^1n9UDNaJkC?cc>;KgH#IKvt^OS+^b[<rV.ZAK');
define('AUTH_SALT',        'viA`;h;LyDSra-2f^PB+je[zrOR|r_%Wd_5=%oVNhamS$/8f.}|k6c2P3QigMj5b');
define('SECURE_AUTH_SALT', 'F3h;V!c|UY?Y#f0Xn~)tL1 Sku^c3F#>Hsv|RaGDcv3/Hf},jZ2Li6X)9=T>UrRQ');
define('LOGGED_IN_SALT',   'Y4Q,+G#(m8]4yTQ!g,~jBgnnoM~+q.u}Eqs?qVc:2HaUZ)V%Be/m<0tv[.d@+kiq');
define('NONCE_SALT',       'bh<6{0sX<}%)2;}={BWE5D-X&KmDI/{B-)HAM64vO G0wTP]]nJPMf.peTN >rc3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'site_vincenttadeo';

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
