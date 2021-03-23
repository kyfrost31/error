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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tc2sl72eiAcLhGMhVf2b81oDmwYmaq6DRcGoN0zAgqMkj4HIrJJZIomCP5fykBDo' );
define( 'SECURE_AUTH_KEY',  'YCvxQcCfShq9QWHvqR3xwq2bB6vhIt3OR6863NS5cYjgKw3QqKpSKZt3jxMMBWoh' );
define( 'LOGGED_IN_KEY',    'dEMIBQrA1f3qBijTKt7UXfLDlXYz24YqHT3QA6Yj5TMMVkHK6PAX0NZSbkzFlLJc' );
define( 'NONCE_KEY',        'rF4UluhV9dEImFWh56ahp5v56PrRjDU2xGXA0m6xXOfh89nEKUK2zCvJ38my6A58' );
define( 'AUTH_SALT',        'jh0u54Ytkj8Vxoe0pQi3Mn2DarwJGgc9DbYFCr3bSS9dDfzWaZTAdGNFNyxfyR8C' );
define( 'SECURE_AUTH_SALT', 'k3XqMSS5NHy7ydG9ZDcFT4tt5JvujUORN8Zj4cYrOID1ea0PhjhxqyxmNaOTsK8f' );
define( 'LOGGED_IN_SALT',   'vvoYfDYsemwk50MdftzXq4IZ05nGJ59qf1x58J30QMoWfo0a64E5mQKaRL2MLop8' );
define( 'NONCE_SALT',       'WBz6UzPx7gDjKPKh8zmc83EmAvuvLPMNZMJWmLEQTIkrBK0snBeoB3sPTPbZyON3' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
