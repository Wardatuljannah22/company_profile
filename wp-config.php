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
define( 'DB_NAME', 'company_profile' );

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
define( 'AUTH_KEY',         'V$ 4{|!7b>tk5&X6ssF+y;EXQN@BQ7U_#PRcPcQffOgpi FxyZ5^c5Yk]xS(ch)_' );
define( 'SECURE_AUTH_KEY',  '&01]e+/e7uPPTEBtbExm~PuB83*VJ.hhHjmf^/J_Ym53^D1)~*$Y4HT`snI,nDIz' );
define( 'LOGGED_IN_KEY',    'K3AXFo{]NM~4#cA9YYpWD|9KK<jRIN-MJM>r_b|`=_8@S,!A9D#Fz>.+n }u]?-X' );
define( 'NONCE_KEY',        'n@az^3)1{Vs(qUe$W[b>.6|*C9%t-}rlp >MO=4lhjK%!tin#w*Hm.,t,LGRIHy!' );
define( 'AUTH_SALT',        'tK*pcE`i}MW+a<GyF5a.m+3FmJDz%&6(3&f1p*ceZ{NA%|O!n[JF-#qyN82K,o.o' );
define( 'SECURE_AUTH_SALT', 'KN{+ 7Yod.9:61qFAwm?/(ZgZ$w.s&oe(6UI+d+Rz-a~}%9*(hGx0t)XO=m)>T#7' );
define( 'LOGGED_IN_SALT',   '6U-Py~%pJ+v_z>Jgj{I>0>m^1l,%|rR#7.6&M[up<k+V%]nqNLAR?YrU8-L6L<7l' );
define( 'NONCE_SALT',       'EfoI*#!C#Hr`<,zcS*vPND~W!!zNuTKD7!sg(n VBWb!D0EPWhVn)$vgBgzFQX%7' );

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
