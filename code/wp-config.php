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
define( 'DB_NAME', 'code' );

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
define( 'AUTH_KEY',         'i>tD#-e;tT0LV@h&~NY5=yP@;G5tx2xSt$%rCp5mI%bHl*H`8|KmZusg:zt=s)$C' );
define( 'SECURE_AUTH_KEY',  'u4~I_PUt^a=`5}%I-1M9Ocg+TuC8op!t_blZ!!P8Qg> tVh,>r&DmRQu`hAvi%nK' );
define( 'LOGGED_IN_KEY',    '>x0?q^f}S4<Ran0wZ:G#!*O*O(a4N/-5*plxFG2x0JwW=L3L=!5Pl@19-6m5~EIy' );
define( 'NONCE_KEY',        ']$^;C|3ESHzbD(,m(+>mlM&j98%6ntuNi$M76=:v=J=~>h^WGZ)2HJiDlBI0xl&~' );
define( 'AUTH_SALT',        'SC,tlSIM`hP:#O%*Y=4%PwnZ%=5EF2/(Al.t>cP[&24jN(w0/jj_ *1oT&`l,Wl~' );
define( 'SECURE_AUTH_SALT', '2d[F$lfO,YZpu^G<|xwn>v,$ yh;rIw@mKZZ[XFxaWnCNNY!1s9s@%uo#X@cKQAW' );
define( 'LOGGED_IN_SALT',   '9e{BgZ/Vt AnX,+rlK8~YsNB9SAVK#*|*:~sBKSLA5]PT33@QCcJ!w& 2(k=7gKG' );
define( 'NONCE_SALT',       '*nBw!H3AdaT7o7^3W=sYy}?F%TOL9ct.#[)+yp*=O51MxelP;[y_CUw|aJVI|_M%' );

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
