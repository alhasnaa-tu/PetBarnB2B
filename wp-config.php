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
define( 'DB_NAME', 'petbarnB2B' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'E^ZErEk,2^Vb3*[wr~1&68vY%*-@z^<XiV^r<vjIg<@o?q*,4MeZDC_(lncQUq?*' );
define( 'SECURE_AUTH_KEY',  'zV.mQK<HJ-B;sRyMjHP-K<lGzs6)vh`n[2bS_H{9|1:Rk6MpoC<`GTnGHRq@s?QU' );
define( 'LOGGED_IN_KEY',    'Z^^Itkgt%V/bt/M(n>@d%>y86M4W%rzvSQ$V>zA+sR:}*TH*-{JHO-0x5BQ*JDm.' );
define( 'NONCE_KEY',        '|N.P:Brey}8*Au(_hjeThi}Bi#xUZS-77,VOM^q|*KjFv-P@wmFR-om#RTzhJ66[' );
define( 'AUTH_SALT',        '.c)K$<WrhiYMWu-#t*vTZx]t]9So<Kev&X?N.}#AQcv`$=(zvmlc)~2]})$}Twq#' );
define( 'SECURE_AUTH_SALT', '9Gi3d8/`o-$.T0YO>f}/FwhXJ{Bl_`m[i>_@$d|`~n(dYKlwbn8AH@v@0)%u?my<' );
define( 'LOGGED_IN_SALT',   'L$j{k{qHpYJ?s~n]DnYhOm#Or[V%#A%5>r>A0`MB8EA_4KwS=*lP<[Dy!:KFx*rr' );
define( 'NONCE_SALT',       'OjjSW5a;fclR|6O&sa|c>vPhD1#cx/ .4PE9$M^AeQ{0*M>XN}^.NC3j9dP5zC&g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pb_';

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
