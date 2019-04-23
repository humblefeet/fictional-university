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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'EnQb/NSPa3gwgM8y0lMiKbXKiChiqDQW6DugIgufsq2ycXw8qE8KvZpENLfELGLQhDrY8sdjeb0/PtkOjyrqhw==');
define('SECURE_AUTH_KEY',  'YsE4huzyQUvOTCKtSI5CVJooRnsl29x5OVyLtPVVk46ldU9KwT88lRKzFZHEJUerK6C7UAS5W3Q9VzstJltrJg==');
define('LOGGED_IN_KEY',    'uxU+ANWs6SdBO3wDB8g9/evw2WYNpdajyKa7SAPO9rSHSRZG9Aq9LAHjTl9qdlJ7xn0wxL/vSHNIH6jLm1o5Ew==');
define('NONCE_KEY',        'e2mXfZ7h2tfiKx1hh6e/T+WePT7soK1z+Bu9QaMXeK6+AYTqN9w/ieNoJ8fjsJf8vCrnRssvcDoEfblHT0RG+A==');
define('AUTH_SALT',        '2n1NQFM9G29iYiKLKakm2uEEQmrUlNDqm1bsddMAQSgojqP32bcchKFQ35Do55hAHCo9C74Ih1HQ5ZZcWRbaOg==');
define('SECURE_AUTH_SALT', 'LzwO25WhwxvhETHB5ECZQEX0pY1aDWGblRd2j+OPYloTYVknLRq1FOzGeBiTURVBVauc83T3oHivmBgNGZVAMQ==');
define('LOGGED_IN_SALT',   'hW8jFneIKJQyBM5vo8sUvao4OYH5T1OZ9nVLrjVUabimE8ou3TvAJeKUjyRY4IjHjm6gMSS8V/UHHfHc8IhZOA==');
define('NONCE_SALT',       '4xOX2RoSmMolnK261xDaohTJ/KuvFtHIgNNwUA1LLV9Z/ADLQk6QYcqjyXDE94r9X1ihwcmbvqXQx1zAnd6nNA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
