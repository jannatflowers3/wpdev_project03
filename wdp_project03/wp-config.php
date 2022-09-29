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
define( 'DB_NAME', 'wdpf51_project03' );

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
define( 'AUTH_KEY',         '3$0gBG{ou=~iW3m9*H!jEcbJ:wW=x5SYaizdC/0/>bn,QH(_BPYJo?W;0In+kz(9' );
define( 'SECURE_AUTH_KEY',  ' S=ZE&=:B&3myQ0uY>XlX~_9|X)zT j*4~GsvU-UG6[}}^,zi=Eh[}Ll2?z&E-]o' );
define( 'LOGGED_IN_KEY',    ' xqcNq$M}Y~9%H:+_v98efNy6< WN38yTBG<fYFdD36E g]3=[BhN[+R,I,v^&dU' );
define( 'NONCE_KEY',        'U<Upu:|?2Q(@H}z[h.KFY2~#C%jgubU}c}5:B0,<RIua~Awe|wx&ZCf S]>D]owB' );
define( 'AUTH_SALT',        'lzd/$jMjmH)Kd+f&(.R482*Kpz1/V|OU(ra+XQ2]CzmkdR/miO9s]&RD^0&KU,.6' );
define( 'SECURE_AUTH_SALT', 'O[/^X^a^s<JG&w6)UTBwVP{)BumEOdMG[o3TJB1w#Epn{?;=pPt1K:Ji{rHze;lE' );
define( 'LOGGED_IN_SALT',   'RQR%5CT1LKyN}k<![d4zNn6iE:zT#[tS;C{W}1WYVv1;G!5`D6<QmC1vq KTEDgg' );
define( 'NONCE_SALT',       '7Y<K=0( ~){z`}bXR##-(@alMgF$d:T-uoVpm.Wvg8O{.OE=Sj2WrQE~DL1E]?ax' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_project3';

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
