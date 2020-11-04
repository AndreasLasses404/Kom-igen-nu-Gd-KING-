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
if(strstr($_SERVER['SERVER_NAME'], 'king.local'))
{
    define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
}
else 
{
    define( 'DB_NAME', 'db2vjn67669kpz' );
    define( 'DB_USER', 'unkmgybq6axea' );
    define( 'DB_PASSWORD', 'nukorvida' );
    define( 'DB_HOST', '127.0.0.1' );
}

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
define('AUTH_KEY',         'X/z2WFR0Q82RoP8rMAfk3M8V6us8+bPUk851kVLW92QOiuFewv0VqlHd0RZOfIBBH/n/n0+gmabMuwfk8ZaCpw==');
define('SECURE_AUTH_KEY',  'Q6jbbI60WGYFyCJNNtG9hsvjXRKIFL91nFrn46WrxZ7job31TLBEBdS8rlLxN5knq42cMUISlSU/8PddjZ0Vdw==');
define('LOGGED_IN_KEY',    'zuch1Udo5PxNuQlqkc5xC9KKzLKor25DpTP/aIrLm4p03h8yxlF+qp5bDU5E8F01xuV+TxaMwna27Exu79rxdA==');
define('NONCE_KEY',        '3AxdHiTKN12gwD/tV7ekqiSurONjRxDy7oOEtoCswGk7GG4bWD+vncVpDaWf942jy3b94ohosZyMlwo+hMcRLQ==');
define('AUTH_SALT',        'zEcwBWXWR4DIvQzTcLi1vybh9gJeiv7dGo5DInMHzzYBXN0BMVOmd/8pZBGxMiF8XbNo/5KI1Yv6J7udj1V7ag==');
define('SECURE_AUTH_SALT', 'WGwv8fxfsVp9CQa7ybbCtTLAKb3Y/VWuHZYHDlJBWYJ0HuUT39stv3pyShZoJ0NDYvtYCnut0IhBIufVv6ylNg==');
define('LOGGED_IN_SALT',   'LwAx177xCJLt8mZ34sEkdCUUU4JYbFy4GLMaW+A9iVSrB7Kjb/nlO/mvwSOjIR0gkT40iQUKVBpO2NDXVWUQEg==');
define('NONCE_SALT',       '5cVMVdAG5QO+5fSLNuHkgbU3C4SUAPqiO/u+W67Eva+vYldZ5PIO2qVyMh5AgaSQqoO/cgQGTpq0Agnqf+Rm8Q==');

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
