<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME') ?: 'hqqiksmy_WPEYD');

/** Database username */
define('DB_USER', getenv('DB_USER') ?: 'hqqiksmy_WPEYD');

/** Database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : '5/I7.oddVD?/>YxL{');

/** Database hostname */
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
if (DB_HOST !== 'localhost' && DB_HOST !== '127.0.0.1') {
	define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
	if (isset($_SERVER['HTTP_HOST'])) {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
		define('WP_HOME', $protocol . $_SERVER['HTTP_HOST']);
		define('WP_SITEURL', $protocol . $_SERVER['HTTP_HOST']);
	}
}

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '773dbd9a4b62e730cce9a6a72d2b2e3ff720172e959205935a69f38d2910a0a1');
define('SECURE_AUTH_KEY', '7df6a323d5b213e1ed6537a6b86eb812e7f0db1a3df9ab591dca5b677949d8e6');
define('LOGGED_IN_KEY', '7f4eaf2cb054d1456114fd5d0ea77d0af367fb8cbdf6e399484b16555b620880');
define('NONCE_KEY', '29304f11a1a8504b9a06f92a8047c16c21eeb24e80e9356ce0dad46f0a3c0d85');
define('AUTH_SALT', '4584c1cb21d2181759763d3643abf74dbc098e8a8cd3e8b0f482926aae6eb038');
define('SECURE_AUTH_SALT', 'ffe6caa8b81d3387efd49a005ec967672f142b8211fb6c7979b2ac3cf264b669');
define('LOGGED_IN_SALT', '85b79f0b99260b64f1a2be2b178a13404e44a250a10cff3be74de9dabcc0ac2e');
define('NONCE_SALT', '6345ff2fb00a52334bf17d1f27d02216a89b78c2f4a23e67dc700dbc9ea9ebae');

/**#@-*/

define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'images.unsplash.com' );
@set_time_limit( 300 );


/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'eOM_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', false);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
