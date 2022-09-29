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
define( 'DB_NAME', 'wdpf51_project02' );

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
define( 'AUTH_KEY',         '}fVj}JEu >zK@%zT[B{?E6Xa }*=%<(7{GY)7tF}e0ea:&>+,kEh5s6}7q71Y1y%' );
define( 'SECURE_AUTH_KEY',  ' <y~[YZX4uAQah?p,PZIh?uTxT+T@:Sp1+`y!/=S0xWYg5MAOd*uo+?l7_}YLQ:7' );
define( 'LOGGED_IN_KEY',    'Y+3Y7uj&rR^Y+JNarK;{{XV7V%CEbcxK:?glMC7N1P?g2~hSr2ab5pZCV%nZjT66' );
define( 'NONCE_KEY',        'j,fStrtAfvPfn%Wkz99f4po_ZH1UyYPc`Jd$(mnnb_suU[v6^a8>/1|{^).U%w+j' );
define( 'AUTH_SALT',        'ALnFH;{a%Ej_CXd)K>K KXt&A.,W7gbL21k,agQy+vy&!sbCm?~DPi@mT[FvUIqQ' );
define( 'SECURE_AUTH_SALT', 'ifgeb6ngNVQS^Le+WPc7iqdoO!zu.1)=&mm&S!3rSDn<L_Q1G1Cu?uQMBF}hZsub' );
define( 'LOGGED_IN_SALT',   'BExJEhBy@J:$?}+X(4s<+5O-&6~hGG7|&bX^N1JFk}vY_eN1bS|eT;_0S+oz!DT.' );
define( 'NONCE_SALT',       'p40y@7U,Q9Fw^KTo.ED!A(=~C$u-SkgI>S:R=k30w.hCohEA]!O@-<3ju5y[Mc%!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_project2';

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
