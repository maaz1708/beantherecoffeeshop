<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'A*i4]v(HmImkIQ.*AvD{ZqMQIf}:xl<kjBskWx&+s#<^fQi{V)ti,i]#$#vZsW8o' );
define( 'SECURE_AUTH_KEY',  '|:s/Ql(]{is<@O}wE(x`>?E2rv3NNvPTx #u~M/]+zf^V*q.^EtwT>C3@H<{gSG1' );
define( 'LOGGED_IN_KEY',    '5n_jR(1vQ#u5cY1[W{3V3k,}dYA.gy{GXQOR~a|,[lUb//./!IzLS_Mvfa4scj$G' );
define( 'NONCE_KEY',        '6?,dZT9ot1-UBV7@V,2^x?zuS[b`/f7s#eW=q<h[`HzOrwG7pv|*1BfqX>+ZOL=i' );
define( 'AUTH_SALT',        'j{O2u/,tJ4H~3Q5&EkXD3^lvNoadp,TZKe~}9kJiMr9f$B.j#ui)#cYn2?.cj Rc' );
define( 'SECURE_AUTH_SALT', 'qk@N3FpR65]3>2Djj@YfyVm^+0Y=TaPISF@&E<dE|{T;ltT:s+K}Z!*T)v~.E?7W' );
define( 'LOGGED_IN_SALT',   'KSfDyG<_.t_VEr%[,?/Y$bH1Onpy=fxdEqh27W6d(g~)CHURoRAeC=J18l)fCOPA' );
define( 'NONCE_SALT',       'NH*%{fN4?Mc4CJ]{nYoOe}7I0q*(x]u?^vK$><rNt%C7022{+B_:z*Y}t#C`=&)j' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
