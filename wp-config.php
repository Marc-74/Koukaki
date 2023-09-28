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
define('AUTH_KEY',         'yKOdVE0Oe0ty14K8mrCTQj6VeYgBU6H/lj9ISKpHWBmq/A6e2imaiNeDGmMd6Au0kJwf3jqBby6lGb8lAwHcdA==');
define('SECURE_AUTH_KEY',  'Hc6vyPekYVDNZNkVH2qRoyj7y6N7KXQW7t6XE1sQBqkpONTDUb/MjjnhBQAD//7qwaS3E0s4oHki6otSGG74YQ==');
define('LOGGED_IN_KEY',    '5LVa2ZWdoh2teGeGJqY5yjk65fXLEr+Qd6hetddAXWVdt3MRH02KNR5k61NpfG3Re/qHK2g/KrzmPUBUnATbAA==');
define('NONCE_KEY',        '733/bpDu9+HwiIazaHNI36zC7YMS6Ab7I7SJqX1Tl80Sj3X4il+SBt99n+J0NZarwbBITtpIp6zTxrCbYlEpsA==');
define('AUTH_SALT',        'kROgCYzBYsjdNo0b3NoCsP1RlFxOMf4NtDzXzeL5jn8+t4/Tf/JwSYV3lsIA0Yg8brD4tU9nx+IwSJ5LmPAM3w==');
define('SECURE_AUTH_SALT', 'GhLCdAeesf3kqKZNZZ+EGZhpLV7BpS2ELV2Pm/yUX1H244ClZK98mnCObCdXChXZHW7hiEDwF74xJIGyG2gl4g==');
define('LOGGED_IN_SALT',   'u+l2NtBDqScSm6Zuy2UfegJQhWma75bsy5Uipo6LQmOiUEpj41hmxbqezLSsIj9qD2KUtRZcAxRzzC72j9bjYw==');
define('NONCE_SALT',       'WAX34qJPwtQlHzsGLqWeyWsZZLaBHH8Drlw6TAfFluneXrQi+8a65G/yQvLSP7x/T2QJ8ZBb7h53B9YUnA3+sQ==');


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
