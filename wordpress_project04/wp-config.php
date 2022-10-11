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
define( 'DB_NAME', 'wordpress_project04' );

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
define( 'AUTH_KEY',         'm%SG()sdV`{?%b:`FR%&]4^kA3hmt N8E-N/0n&&4eGAyq2}T}mUm!n)V6#`T^J_' );
define( 'SECURE_AUTH_KEY',  'grfE?3sk89j_+ PaJi/J,|0ejD5G/!:6aZ,{?hvo9w(W38b/a$dj#vfo<ZEK*U0a' );
define( 'LOGGED_IN_KEY',    '(HM2h;>56qkj;15tO[qG}wKo}aB*g6P-kg|ce#Ec9i`qjOeCg^N% =>@0vubF1_;' );
define( 'NONCE_KEY',        '*T/Bo;!]EYz2B8-x:4;g},UlS &im79#IQhA@784&b&sn0z|lQn ~L5Pg|A{$iL%' );
define( 'AUTH_SALT',        'v;l{WtRr)^od?CpJ!Qs)XQMX]XEE/39!_>LM!F= kxnLnM&GM!gT83N;D3[>VoGL' );
define( 'SECURE_AUTH_SALT', '_QS%,4XW%x?w{@^#{+RM(0E}4fn|;BFFjqG2H(vN `Qgs~Gk%q)vqk!KnB@7UNBp' );
define( 'LOGGED_IN_SALT',   '_=Q(O-({8dK3R;Kks;FMgJZE4t,&DgMvldU47C:yv^uwpr?y?M&>;j-8G._Q&r}a' );
define( 'NONCE_SALT',       ':0hF[X@~m12H]BGag%+p-k5}z/X~WUZ#@,0{|]$2M7P%,7Vo$:*;WXtIubou,#s`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_proj_4';

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

define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf51_wpress/wordpress_project04/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
