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


define('AUTH_KEY',         'zXudAMuiQ3XE+X98lyU48UicuGsuztvjuQgZM2TrE11GXzpxrQkanzhMnx/8svg6Bsj3tTKHfX6fH9Ajpg1erA==');
define('SECURE_AUTH_KEY',  'nlWAzAIsLom6aLwJ4OYoQSeiv/S9i9L/l07vGKcgCxHcmI0WGtX9cmmlc9HBdzIwt6sXu4xwDXo67pXmofXmMg==');
define('LOGGED_IN_KEY',    'y0aVonuBTv0gnVTs0spTi5ssK6JskUs7lSi7WzNDnJJ3PqPEEKFYn1zx18fR64vv9bmvsuo4ZRm+Iy/6rXKw2A==');
define('NONCE_KEY',        '1CnTLfn815fRnD1o1+DRbDUC0kVP3aE8sVfi1kvdDvO8BggWwAEP8Mqblz8Co4iuettKpFssW+wSk6ZCgzjv5Q==');
define('AUTH_SALT',        'ouZGLsMpkB7oVAoQ0mvLoAh9oJ9G6F0xmmWUIHtFixhLarTr/PpW7FT5V8AQE8l7cgacLJBmMnR1e0RCBQfbPw==');
define('SECURE_AUTH_SALT', 'vyf848fbtkXBLyO6By+0GUuwrCgH34N18OMMaRy7uC10wPMSHIg18SI+hH8CFppckpN3j0yr73lLzwF4rcxp+w==');
define('LOGGED_IN_SALT',   'G5EK+6sVETkoCGd2Elp1EMje8NFIEWL9PNooP5dWubxhHDQIVHgAi8i/o4R1jZuodig1lqxse2CUTea3mBDTzQ==');
define('NONCE_SALT',       'kyVjJ6RjxjRqi7zCouhcknxYaRmQl89ADZGnB5N1/tvui191NCMle8lWjkkYcP7ZCpxk5CIV1tsdCEejKboOSQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
