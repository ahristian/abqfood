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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DwHfiiK98nZGpLq7enohiqxYDXZ6Iu8O87hyibvLNnIpZ9kgmzBoyKXIEDjHOgQ2TNCBsLRopo7cZwQUSTT32A==');
define('SECURE_AUTH_KEY',  'ZLAfEVwyZhFZ0ZR7DVRbH4gopw1hDFMuYi+pFBiRBTXWej8IYKapfbzx/L05A9d056ZNDexrS+icnWlDeF0oiw==');
define('LOGGED_IN_KEY',    'XtwB+GSs4LdlO0wq4hC4v403j9c+6nr95hw3+coVNZuKFwpuECSKny/rFYc3YV5VT07bnHqPqjsMGdsJt66g6w==');
define('NONCE_KEY',        'NRuVI3TOWpDAI8w/A2sqPvmFLbPTrJOw+4qOoUGgv/wRMnwrWBGyggRBxZlzU76PBd5xBeD0TuO/IMf25CuNVQ==');
define('AUTH_SALT',        'BhW79uuogRf9m4udF5WJV8+Lf5e0UrZhf/YAAFvRGrn8EzcTf5UXsy4G58WKpm/jE//WnL9yvndnyFropkO3gw==');
define('SECURE_AUTH_SALT', 'U8RImQV7QoxswFpVnr34ouhnJm8WvU6dNwWshFMbgBNs+hEP0M8caSvxksCQ9iNnWSZS3caWhH9yZ/hTnfW4Bg==');
define('LOGGED_IN_SALT',   'jq6Lex+KT5t7vA2fHq6FgBMFh2pVURQmZ1K6lME8RklWIkiVh+zmgNtGDLypOYhKUwI0Fk7qBiOw8icKe67W9w==');
define('NONCE_SALT',       'qdOBhRwNSKr+jyrYW+fGidfBLUeCemPv2mg2840o2IsowU21ET8/mqx2YBU9RHXSN2DkzMfjlV16UkNwSezOVg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
