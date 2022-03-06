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
define( 'DB_NAME', 'edvjts' );

/** Database username */
define( 'DB_USER', 'edvjts' );

/** Database password */
define( 'DB_PASSWORD', '152463+Ed' );

/** Database hostname */
define( 'DB_HOST', 'edvjts.mysql.uhserver.com' );

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
define( 'AUTH_KEY',         'qM;./VGO?|ZbG4sitV;I{Kl.)X[j.2_C`R;BGs#tIYuBrd,IJ> `w4.urCM|88g{' );
define( 'SECURE_AUTH_KEY',  '`jlJ+H/g<y<4[thsD}sObK,6 Eg&YK?pWSWu=[X6aui}I;([/hLnnQn?D%G|!!k-' );
define( 'LOGGED_IN_KEY',    '8TKoQOUNS <+,tmgos1Q)cZ{9Dz p`I#<+(NgYV`bcLt;EOF1L!WTXtpkm>5d<PJ' );
define( 'NONCE_KEY',        'w?In{rwh(Jdgb}8t&82gUXa-7Qdo(D?l1@X5n-<Lu<d ]c_ |3}<XwI4VIIiU#yP' );
define( 'AUTH_SALT',        '$qT!VYz{q,NhqS;Bq3ayf;(PId/`g#32g4R5kRNrZO]1-iAx{@w!5,Grz4P,3Up.' );
define( 'SECURE_AUTH_SALT', 'cDAs>%RGJjxV]4!#`7E&elPxVJQ/8gI!Ck]*wx8fEe+_?M&,_<d*gt7XCV<&lU_-' );
define( 'LOGGED_IN_SALT',   '%1e@`)jn+|UIA5gwa.WUJ %&sIeQ Y2Jlch&:ek$tu`W|T%7ujR<l(B_*lx2%U};' );
define( 'NONCE_SALT',       '>Ytv>h>k]LVk?9Mf`_{XtDEyb//NlnoN6[Q+;ARxGbvWh@UwI+lL%M2j,(t^H,J8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cvd_';

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
