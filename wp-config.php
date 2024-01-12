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
define( 'DB_NAME', 'nadrical' );

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
define( 'AUTH_KEY',         '7G$Ib6]{;{P7 ^MQk,lyRhOeU4v[/<?|p/@<Y{lS>sJM-m}ys_*@92 Fpqocz7kH' );
define( 'SECURE_AUTH_KEY',  '3;IM-;rZ]3.}KARYot=`! f!b+VMTgL[6v.8Rc.:!1x(X|J6=|_]Mc_Yk41Bcz%:' );
define( 'LOGGED_IN_KEY',    'BXh*We{z=]E3Qjg}sxD7~*!rOvV@BiTvy4qB5jyt5!OGJBdp^:15Q{4YNiLp*U7T' );
define( 'NONCE_KEY',        '2Q~roNH+I]Lg[uhLP2PnzM?AyjqM+~NCG};Cx3DF*iUi98bN3h@1N^m)~Be)4?~L' );
define( 'AUTH_SALT',        '>KQWl!viqg?+10K-mdr`C.;=md?(Mj,d)YId^,cQ ~>dX|e?(G+uD=xPoL:^SpoY' );
define( 'SECURE_AUTH_SALT', 'Y+M1j9]!vaCaQR-:6f]{!Ko92yiX8[ 5!9ZQ]+ M=[oZd0Fz Ux|%#L-rhy&PV@}' );
define( 'LOGGED_IN_SALT',   'c<&.fv*$f_`_gt(ot4G9y8DqeWw<GF!GUv*T-9QLg=FyLY%Y3ya+;5.-lvW*B%xh' );
define( 'NONCE_SALT',       '^m:;{T7_xvsQ@W>13a>jHgaDp$@Y``c9r_KK.}y_IrK,E%eYV|~hOXQdQ^o1]-e6' );

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
