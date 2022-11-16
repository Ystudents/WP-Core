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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ydays' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '2KJQWekbxSQX86AG06uTdl55qQ7V0INW6evgMutd6QdOxe7maMS5wmEKXfKA9tMo' );
define( 'SECURE_AUTH_KEY',  'Xyh9iwFXDV6yHsJCjX4MUujRXEEmP3WZ9Z1Ov2X3ynEMiMH1njsQQTNIlXQWS7O9' );
define( 'LOGGED_IN_KEY',    'kCpawZLSCbwH1Tzb4zukILkNRt4unEuOB9U8JSF0idoATtGQJhmTsjGEIf6c8hlZ' );
define( 'NONCE_KEY',        'DP84UlfrD7UobT4DdjZOtrOs4yZlZUhmoblkyDiyHBq8jIL6bPXbyA4xbjMK8sEb' );
define( 'AUTH_SALT',        'flfDh0a7cAd255RkS921GQbGVZIZ0cKaj6NHkMQa9yEnUDAx2S3dLvjX8IGcZROD' );
define( 'SECURE_AUTH_SALT', 'CdEFsNk6lOnUMuN3VGDeJhQ4skc1FSSaW6DXXoQPyEJ4apq3l8WrFv5x6ECjnuT5' );
define( 'LOGGED_IN_SALT',   'CGT7ComiybpHUipdZniRIahxkpjAgAmFOOxwtOIT2TdaLuLVrmObOLAdXeXfuzG5' );
define( 'NONCE_SALT',       'kG4Ub0OAhDT979VM1pZ0ncpkHfnYLuPDYaCrrMQRtV19BHeJ6WQDLLUHCVH4p02q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
