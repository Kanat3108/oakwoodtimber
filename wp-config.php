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
define('DB_NAME', 'oakwoodtim');

/** MySQL database username */
define('DB_USER', 'oakwoodtim');

/** MySQL database password */
define('DB_PASSWORD', 'DH5o9YinUQ');

/** MySQL hostname */
define('DB_HOST', 'uvdb36.active24.cz');

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
define('AUTH_KEY',         '&w9]t?oR2i2%@Y:iBiwFL |GwQt@S8,n&GbD2h1uLWU1bVhUBIii93jZtuWv}7Oi');
define('SECURE_AUTH_KEY',  ':E&2:TML#?6qbpw8Fe=Q>RM&xy{p0;L,*aU<E)?7n$Z%~hG5!A`Tysg<T(nNI(%~');
define('LOGGED_IN_KEY',    '^d+t7<42=+$`,+ bb)]3,~r5AWtJ?fm{C>8N>qEElMRLn!_8 LshcI/~*W{CKQ?C');
define('NONCE_KEY',        'DO(Hji 9UaJke8[>W7*p_98|;vk/48q4JB4E,Q6U^BvFATV2vGYQi?f>L%=>sKIw');
define('AUTH_SALT',        'M,}*1oZu|Ioj,#{L2>^U>a+,*/^n,?UrPvpZrgySYlKQOq_W2nn89My]}tok~oGP');
define('SECURE_AUTH_SALT', 'NWI#L%W*`.y*2/8JGg/ xorlk}V$0W?H]1=2IV?)g5SQPeV>)FqMv!&.#Fu-z[N+');
define('LOGGED_IN_SALT',   'ETZ_0#9`G5XTI)_oVZu8?WIfJ;EdkOdxyrM$~:}=-P;bkf-KnNO6PGK)1zzI.$)E');
define('NONCE_SALT',       'Rlh5QjB*8mc3<@LQ3]Y({0QA,y w:z]aX2J&0Q6vfOZ8LCQwA~%1Z/S`!%;8c5;a');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
