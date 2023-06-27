<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         '6bVov2zHcc5INSImtGk8mO5/K6SoPz8uqTs4hTn29E3i2OZ5BbQwajRnohotZFoLNpwkYOCe3XplTngD6tzqMA==');
define('SECURE_AUTH_KEY',  '2wVjm0FQBGRDY87t/W9i76rKF2HS/YfrkXKl3HZb34JW887wXo9b8sQnMudia3PHwbTE5SoZKAG+iJ5gNC1ucg==');
define('LOGGED_IN_KEY',    'NHaZ1sQUVQJ1ppLKqqE8lTc/STTrnCP9mbuloDKNTaDkGAqtDyCyB7O61x7ol4ZvaqZVj9drwCmjbjicooGT/w==');
define('NONCE_KEY',        'iRJlMLjFr7WJQ2Vkt183MyFLrHbkJdR91CRMobFFF18jpWRIrPIzfoNXD/BnOPXnf1jsepFH8ImXFGXVgsSEyQ==');
define('AUTH_SALT',        '+t73ZsbAhaqB4i4xXeaB4IiIMWKFYMHrKEe7E95PtQ6gZe4QRMFr7qDD5pbN2CIAsOkFuA6XrBoNJW5PHr02GA==');
define('SECURE_AUTH_SALT', 'gxR5otOxEhG6rS+cLwi1zNp6gMmmstP7wPrFrmslyrWsmzpSxL8D2Hpirtd3TRwj6PFdOYn9i5/I2cOBtCLqHg==');
define('LOGGED_IN_SALT',   'gbj4yPKwDO9/dDVxt6fM7vmU4Na0eseSAccaBXjRIPY4H8u0n6VURaiVbbRvj2jfYdOtkA9eHjLrFUwk4gnCzg==');
define('NONCE_SALT',       'H68M7BuPyuxbmjTdfpkOQVNklNyJqILFlDa/j+9WiCwF1YmnW3hFLyEzwCf6TPXhOKqRamRZRxaoDHPzfMQjlw==');