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
define( 'DB_NAME', 'happy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Gf>#x2^ =!.~*LZgg~bTZ:54FIwe]kH@EZ<T/8F{IyK%/y9?vt=*?v>D%#gb3+?&' );
define( 'SECURE_AUTH_KEY',  'qglj7aJ?E(Ifq<DH2id9#[b BIWury:.%_&WD>?MxHEnSu$!1bTUvvA-]#I%Ke.P' );
define( 'LOGGED_IN_KEY',    'o)fdfT&+TeyVf;qA;%YXP>FxY&G@axkC1;ZW<qI@?zCuXcxhuY8!T_jr|m2Hih>9' );
define( 'NONCE_KEY',        'Yim,-KA2+ra&Fu7u<i]Zq-`#y0P?|SvJN[Z[%:Fs@It(x3/p75D~y-$N{#xEZGxA' );
define( 'AUTH_SALT',        ',&%}@V$%U2u%9nn3vde<Mvf7r(N8f7fqg+[EzQQ?0.Q2ky:Sh2gK(FN0,a7Ra)mU' );
define( 'SECURE_AUTH_SALT', 'Uc,X7 x3{!dy*a~Axx|&> a,+=y%u[de%UMr<tg0@I^a=Q6odf0#HdOg6RB=ROFH' );
define( 'LOGGED_IN_SALT',   '>ESM{o>36c{$7*J0XQc_[=)//d`b}fNE6/d]aHU*j0USip4(JRMV?^BdGM#gm rG' );
define( 'NONCE_SALT',       'h7BpoG/CId~F*ft112BzewO$VF}L}|Z*.qSFS/LR8H^y=?9jKW`^L)l#)?x<{Fyf' );

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
