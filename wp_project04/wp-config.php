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
define( 'DB_NAME', 'wdpf51_project04' );

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
define( 'AUTH_KEY',         'ZAli%7s<M&f9a@eX~@Z6^;}e~Irg $W$:2x(MGW86--KuumRDJ]]Apx.?T>21D`I' );
define( 'SECURE_AUTH_KEY',  '?#*D*JV0mh1eW%1`Ht/%o[R1pxuT#1wpsNQSU;azS3dx{UWy=)+Qn$$sw-H5MK2`' );
define( 'LOGGED_IN_KEY',    'ykojNr_6oW|QxMD7VC:6<7}!#J)WzVQ#61`Y13{Q#Z<M,,E!0K=d>uxJe&x<_[9#' );
define( 'NONCE_KEY',        'FM;<G,E4$-Zr!:$0okRDw^ylxM-cJ2C`ljKFzGM L^B-D?5-V3b~% FKZOG5N*ap' );
define( 'AUTH_SALT',        'zf^oeYSiWDU|KWSBsMV!=PK]+_ZGM@/}f%paN5Q_EH6sJgT=zX%1{IE.4WI&P@RV' );
define( 'SECURE_AUTH_SALT', 'AiZH_2ko=)%bCO,$Y37!22Gs`R)9XmPxpFeT=*GwWA4I#&8K{r~ZXieV)`qk79oR' );
define( 'LOGGED_IN_SALT',   '$_u}e3Nq,%36JzE+9_-|m!m[T[kju#~7aSvuDGnAlijv<D;KckM0+|0%g*R77M}|' );
define( 'NONCE_SALT',       'A8!3zS%9tOAb1u-0ud)GEFX[YOU4brURWH(R4^i>!(@kEtB<=_?8Koz`!Y|^Lshr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_project4';

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
