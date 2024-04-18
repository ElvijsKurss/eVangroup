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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eVanGgroup' );

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
define( 'AUTH_KEY',         'eGd7TgVveZQkh4bFzNsUGS7hxj4VQOqiSzgDMHMjMnE0gXkHshcz36sYheFbl2wx' );
define( 'SECURE_AUTH_KEY',  'B8xoQC5d5ezgEuAl3mLYqgB3p3wtSXVuI8Co3nXPhUo8Rdb3NIQ18HeT71rAGMY5' );
define( 'LOGGED_IN_KEY',    'nMokdFcWUZQTnLz0Xdz1n4Vx8001igIVHr6lNdt4JFeexWp6j1apSpW6gzqZZN5G' );
define( 'NONCE_KEY',        '28RZY9XPw9x830Ct5q0yKkSC0JFeTLRs2PLfYidNaYZ4xB8E6TUV1GTRroWdxWCM' );
define( 'AUTH_SALT',        'HhGJ0fyUcWDXsLTpD4itguqymrY3XsFHMHDExj0EBEgsY3HlNDhU3jw1RE6fNNyu' );
define( 'SECURE_AUTH_SALT', 'phQwI21dVo8oEBoYE5ZMVwylJh3qsl9GV4HzvhiC4G4qOfa0rejnYjQuwlP4ImTQ' );
define( 'LOGGED_IN_SALT',   'dL2xuIY0OONB07Cp1klb2bsHBxsxkRBPkRo4E4ZYvMq8UJgjTnifEof3VlrfI8n5' );
define( 'NONCE_SALT',       'PFHKp1Zt52zMDSavov1MwqRvSLpQ07FrMF04PY7QNNXjlkLITHmyYdvsK5bgPyMq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
