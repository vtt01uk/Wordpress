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
define('DB_NAME', 'site_name_db');

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
define('AUTH_KEY',         '8kR-tg!dczPge:Nf/@nK}!]#*B5Z/B/a]n-y>0Mak&r;V4#At:+%XRMxI9/VQtra');
define('SECURE_AUTH_KEY',  '2K%F1~UuBNGmwOpf{H1!GRKl2>_w9w[J30+M7n$5Rvc^|t0 7-&`f0)@5XzmM6v[');
define('LOGGED_IN_KEY',    '$07}.fA,M(gvg)H:*D<Hr$N`)=4`s63UB;*}91gF2bx4P9R [|&c+*nubGR2 3B[');
define('NONCE_KEY',        ',&Fzzc3r ?CH9%6$?aZ_plkr-.rWkXM96CO/K^`s?sv(^2D1skY+/SjnaE-7P;5X');
define('AUTH_SALT',        'bZ0U%MG|F6!hUyrdn>O%BC7PgJFGde:])G~^%mObAlYxFtdjul{5;}]=sdB5URC_');
define('SECURE_AUTH_SALT', '<{>_ViLRc<Ywpp?^^Wjt8*YOy:e]y2|/}eHSumEa&59I**u`v}n2)MHf@!N4hmio');
define('LOGGED_IN_SALT',   '|jI!fZSk+`f~BP}.;Jb-qUsf&6R4a8DIn4 @j: ahvd,++}_wUhY7Nl#)aE>5Ee)');
define('NONCE_SALT',       '^t0H8~x~%m&2$bT/2f$9&u3Ee]vx64~JnKq#Fj:hxx%*:/hW&$I!O ^H+x?Z5Xpq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'site_';

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
