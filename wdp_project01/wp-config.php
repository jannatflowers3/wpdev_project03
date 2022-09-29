<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wdpf51_project01');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=ZK>PSMmMJ?w#Pj]8[{rHMYc(%g_eUGhE]?v3LDjF~MZnP.FwPk^bgUsSt~(C#71');
define('SECURE_AUTH_KEY',  '`x8$?y;B#6DG&l(k372k)W?TtHjg`@1YW~6@B(B,.[)JGWp^x/CDN9{TZ,1ms<&w');
define('LOGGED_IN_KEY',    'yc~n0t(2c)pt@H1p,XX=bUm9~e,jDu`O&[js+U^xv,/RFc~}K|%N|{Bcw(-Sz#,,');
define('NONCE_KEY',        'Zkt8.=?xh&{8A!O#]Cxh 4&>fFsM9/Mb/jXuHh!zYm@! m*F0?B1D y~z6uS2[Xp');
define('AUTH_SALT',        '8I9S|liJo[UV)dOoFBfH{;KG5xYq6t7OES(1ueg^o+8=ZMP%giJ}W|D1ewG~,vF.');
define('SECURE_AUTH_SALT', '/~pK+&:@VggH^of29%e_$Rp)yo#Q[X9},k02iQ<5yp*:SaI33u7Cgo&^k3e/rhcv');
define('LOGGED_IN_SALT',   '$y_ Or=:{CrLy[>bd!J2D%xSU$D&O^j{A|gLfmf>e5Po/fFIsHB~ZqzM#Ejt ^!S');
define('NONCE_SALT',       'Df<op^%R*IT-u@x #x,E]S,}a%4PUZi|umya|$RpfP&-Un`-U`:pTWWSkl/p^_&l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_project01';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
