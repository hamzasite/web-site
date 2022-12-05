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
define( 'DB_NAME', 'wordpress-db' );

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
define( 'AUTH_KEY',         'A.9o02m}D0hAJC>l]^3``*<SCih0]vzTDnjyn-W#}NQwms;cD:r<cU!IpoZ#A>+2' );
define( 'SECURE_AUTH_KEY',  'QQ!SdMx7L[Bm FKvKuT-yFYjCV>J!]g%#L=>s(zy`[Ba,tShg[l*pIiApmDhiaL3' );
define( 'LOGGED_IN_KEY',    '7<709)/U)IG?wHD8Ed]>~xN9<)oKO`pF4.)8,!Yfdk]dfTrsh4I-0!kdR>&{re8Q' );
define( 'NONCE_KEY',        's T=h+LB0NhhN-e]FC16)kqj]n:T0j=cVU+-~[UzzwM&5`.#kiSdNW[:|@w#:4YK' );
define( 'AUTH_SALT',        'V[)>s%,;k(iHlx^{O{@{B(oEhBlWX?Og#xC&aNH? n.X)dac]0n}h23JzjOHT)u#' );
define( 'SECURE_AUTH_SALT', 'OloJEJ9ZkH`G8&$kmCB=6%$ht=8@ YWKTy!9Y:Y:&??cJQ#6T}U=DgprV7oRbs~|' );
define( 'LOGGED_IN_SALT',   'oe`FZI DU/i+-$ jrh]a:>}<:`Fk%phbT>CkB4EEM$>fBS=(DYM~0W-E:I3m.|eR' );
define( 'NONCE_SALT',       '#@=$n- IW7:I9OYa[S(=+`d}*||i4&g^F9{3tOu *Bs}Ft5o=t502a2j;=E#8 E+' );

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
