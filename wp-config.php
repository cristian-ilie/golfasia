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
define('DB_NAME', 'golfasia');

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
define('AUTH_KEY',         'iF/9PD}%^bP#d-^$|#Gatfp7ZPZhP?T<d3gSD|+LA}==eS/ghAZ+_S2NgbQ!&m.^');
define('SECURE_AUTH_KEY',  'gOY:~sjfZ[;gxX }Q>T~|&D[YXWNU>9B7|yi}6&#SxG!S3bjsX<kDAD7NtvlPl_H');
define('LOGGED_IN_KEY',    '^b3ur_%kG&PB`W+Oom)C=vad<$7ou> QZ`jPmaRhYP#ESr?hL4G-$ 8{syFn[]qy');
define('NONCE_KEY',        '6ix!M:i4,&6mi]js2g`zr{#|P@}!M+tbC9(xf}1y<le8@5c02KC1v04CAxQvO+f1');
define('AUTH_SALT',        'SD77c;B=O5yV/l+2</LDr>f/tbNceAcU&})Z//6k,9D1YZLfceP?yPAsZqAfP[^n');
define('SECURE_AUTH_SALT', '75rXVEfVb4#dZq*LQP9r,> H:Hr/*VEd%wj:%-uPI-5~2?|UYEOFw@oaSOzRYM.w');
define('LOGGED_IN_SALT',   'SO#M|7ZI389[jkC~sjRNM.^-S5x;T!Q3mQ#v(!|mda:2N&,u>1C@T zH`enoKgWo');
define('NONCE_SALT',       'n~@i&H00 }f|:+)#chx`xESzCj;ONe/kkNCG{eddns$=PGE_^]!`UUmsV8Q8=I}T');

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
