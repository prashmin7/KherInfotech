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
define( 'DB_NAME', 'Kher_Tech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E]EU3&: %TC_[e/s.4`m;:C2d!7[^~F52!pIl$|;[):f$@f(.=}9H6Jc^)dX~r,-' );
define( 'SECURE_AUTH_KEY',  'X)2ty BrtANy{hW.V!ap*#}`1k?CYzel+OxG&WiZc3KzBmE&V<[2l[16&t[(oG+$' );
define( 'LOGGED_IN_KEY',    'J]Wg6NEp}+DouC]Cdg2`/O-5nNql60qI>W^tE}rYdW<G45:?}6iEHZYC6hG9[:VN' );
define( 'NONCE_KEY',        '2+Z*#ih_vt]%YM>dq!-6J9;dA6/pC)E25hRMR%b|p)]M-Jb!)C9bTNI7Qbr=jOjr' );
define( 'AUTH_SALT',        ':~A_8I]gq*Bwh2P^K5*nuFCx^BP&2S!8;</Y/e XqmI[+Jg)b[yDR*kvzMyH <gn' );
define( 'SECURE_AUTH_SALT', '}aK`H&?O MD9thX`H5YoCZ~IE:b5c#0:})-:7HZ+=aFr[b&Bv_m<d(Gx9+nEO@ie' );
define( 'LOGGED_IN_SALT',   '/@^u cwq%^j?7/_eZ6#fx;QCrC7Ryb-/b[`n+d~j5o~i{l4tQK57hh+Fg`=MF+Ip' );
define( 'NONCE_SALT',       ';BGcde}h`2@auF?Gp6AR=K76E$I#,R]M_#+X2Ove*Ng|U=:30`70umd%T&LahZ[Z' );

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
