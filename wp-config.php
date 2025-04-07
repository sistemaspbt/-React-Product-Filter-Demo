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
define( 'DB_NAME', 'react_wordpress' );

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
define( 'AUTH_KEY',         ')iJE3Fz4PYdK<[E+egAxPKjb8e01efAs0Tnya4cuLv8:1i;+V=2^;{_(j!pOH+!}' );
define( 'SECURE_AUTH_KEY',  '^!arzhjH>;]/%j[ >ed{TnIP_z@jrazmLd*t-0J4^JFGbtXUfrx$U=[-i7]`_`]h' );
define( 'LOGGED_IN_KEY',    'XHD^ybo5[,f}s?w=.~(43?#w!+W#*&.i} U&`eZ:[9,A{MIs>vYJ1v^/TR~/4q_o' );
define( 'NONCE_KEY',        't<P}8GZp-GYF)IFm,{x2tb+,Yyz`:DBc[4.YM11kQ0BHLd$Z!;N%4?N+s$AtLi%!' );
define( 'AUTH_SALT',        'kLSWh+S$:}}A+`GSE?Y1E;Kw2Es53%i+P~F.1u>Yvj$hd&l%sRpVS%R`!po$c ze' );
define( 'SECURE_AUTH_SALT', 'b@L%f+%ELB3o7X^#O0GVz|CF!!U9*Uk.Rd&?3M/`iz|4Oila8+Lk S;YEtfC{Nq%' );
define( 'LOGGED_IN_SALT',   '!`?kl,DpW[n1[$SD/bcfjBRj)w,Kru7- I!7k_B0DMC7{NLNKgS~8I/ 2ShA8g~Z' );
define( 'NONCE_SALT',       '7OWRebfS6PpYPu@8(&5X:5YG*%kcpo.+m%/1njVS=TH [_b/_n}GIl);zSiX6pLx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
