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
define( 'DB_NAME', 'db1');

/** MySQL database username */
define( 'DB_USER', 'db1user');

/** MySQL database password */
define( 'DB_PASSWORD', 'hvEpQuBX2uBtSfL7DfSyhSfzPvc8tcWU');

/** MySQL hostname */
define( 'DB_HOST', 'consumersdealdigest.com.db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3aa2204ca9649be7aa16014b7deddfc4e5feca58');
define( 'SECURE_AUTH_KEY',  'bd2e45a5cc87ee81bc4197db7df6a742596dd26b');
define( 'LOGGED_IN_KEY',    '09f99fce2446245c99cafb79183c426abd92b5b8');
define( 'NONCE_KEY',        'ce16927912123b420716d5a5082a6da4f8766a75');
define( 'AUTH_SALT',        '22476caa8bba5dcd324983cc78ad931b0a8e9c61');
define( 'SECURE_AUTH_SALT', 'a10e638eb178ea3912395cd9607f4b2a57ad47d5');
define( 'LOGGED_IN_SALT',   '0e1aba7239893510dc6e29a72b1e523aebd5c125');
define( 'NONCE_SALT',       'c1ff7daf6a469d68a6da19e48248525f921f5ac2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
