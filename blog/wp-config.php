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
define( 'DB_NAME', 'resolutedynam9_websiteblog' );

/** Database username */
define( 'DB_USER', 'resolutedynam9_websiteuser' );

/** Database password */
define( 'DB_PASSWORD', 'rrQ,mCq],L~B' );

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
define( 'AUTH_KEY',         'D[@v9L}1yv:]Q#-#CbcH,<=b=`-: x8r`?LfZW<]Y5g.v)m]GZ,V/,j-Hwv[&r7y' );
define( 'SECURE_AUTH_KEY',  'xD4ojqIBlC;,j*hI,oj4b9iA{s~B`V$/e6]r`l/>z.Un%K9i].V2]IE!4 xp#&Wm' );
define( 'LOGGED_IN_KEY',    'o<.]nB5_{tE7l.e*y39sFh:M6sRt7~qEd&K!JLkD1NTd:c/<kE,2yEf-!^(!5g{B' );
define( 'NONCE_KEY',        '.No[hqNkPW~_87g-l,hA`dOtB_yj^]:b:VPA<+UmSE$1@,{8TXEm.zgYLeKF-[^.' );
define( 'AUTH_SALT',        'P18GHyf1~k&<Z$<e{z}qD|+[J>%w>OJ@m$:}=i{vurD.9i{3cJD {CXS6:La0t$O' );
define( 'SECURE_AUTH_SALT', '6=Srz5t>rMO6^l,66FLZ%LD/WyEhRxu.q.X#qlTk)!wsfRQ}YqvxzMfo4C2jkOE!' );
define( 'LOGGED_IN_SALT',   '?N`qGA9n*ZxR^<]AkhIBg<lQ!l`7:b9/.yDR:`n?%:3ah)v3sX.j<s;L$&c.vXIv' );
define( 'NONCE_SALT',       '&Pf=rF.8x8*ZvAJaP+&lKERqb$gAT}4x>OoLPfG>;xU);4#s2l{4D/B^lSeIM*h1' );

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
