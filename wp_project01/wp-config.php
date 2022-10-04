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
define( 'DB_NAME', 'wpress_project01' );

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
define( 'AUTH_KEY',         'Ql1c=V9>B4UIw!j*!#[tE#}]@SuhsfQ*~L:o!;zCt;*`YWX0JZZ}[WTzSe;@Njs#' );
define( 'SECURE_AUTH_KEY',  '@I{ot|T#`7PU&UkLO5OoZO@6,H2Yjv<3+qrv@<Zd0eq#h:&1:VtWjuhN`iVU^9;7' );
define( 'LOGGED_IN_KEY',    'V)85*%/$psA$F^u#i,7nJ*X E(;Q;1fA-}15gC>l~avL=$i>h5Gx rV3A@afU:+(' );
define( 'NONCE_KEY',        '[uB$Mgp3`0cr|K]hzyhfm`0p)R!,EJDO!x+3CNaKL,ELFX*{ :mEK1|Rjbr4}5yC' );
define( 'AUTH_SALT',        'xIeRY9}^Y;X/+18S/?WM;!3JUf`p8D:*^!a 7PIq}A IbBfi%s_h7CJ:9oCjkx&8' );
define( 'SECURE_AUTH_SALT', 'uiJUrF~bl{4|X&3??%iGr|yaDuoNRJP_9soZ*2=lvHCd5-]6D5Co]yXHHX7sTvNF' );
define( 'LOGGED_IN_SALT',   '~S. Hs+$?[t7Kv:}g$n!wgd[?)^UFdh]YnE!Fq_Oehim:3[`l#G:dnc`DWYvYvA-' );
define( 'NONCE_SALT',       'X8zxYb&q>8FO-Mern&SL>|S{oFcK5Nb9s*YiLJE4f`hy6$Ak9kC@g?x4[d1Kr &/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_01';

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
