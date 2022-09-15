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
define( 'DB_NAME', 'medinova_wordpress' );

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
define( 'AUTH_KEY',         '~e}>ol&7%v,Yi.YK!wPa3_/gd!% wWn$ZU6|mi [1X-<Q~HpiNvSuu>q(TswA)|b' );
define( 'SECURE_AUTH_KEY',  '$qh[[,%HyRk/w`|mmFY8iXE6Vfczq 1lEv~Z]H7p8P -N:PsbH0&>|XkYh0h,7F1' );
define( 'LOGGED_IN_KEY',    'zO0x?dM(i(]R:4W9*M+f6-,&[M,-OH~q2(ec<Gl=b>f%o<{CW2F<z=m&_I*|Z7vN' );
define( 'NONCE_KEY',        'q?O g7``Q?Y?:!%zyoJs-#wgMn$p3Sb)n!W%JoY2 F>:VBKCOid=/faDdE}5}uy]' );
define( 'AUTH_SALT',        'i@(xc|`FD7B67w]u~(W!Mx,Q[wxKQDf!XqaDf%~/l=A,2og![>gnDI)K^~[X#gis' );
define( 'SECURE_AUTH_SALT', 'QZA/X>6q-&?cZLps.ORlH$03xge&yn.a%{6m|&,pNa9CCWjE/a?C4Cr[sYV7{nDa' );
define( 'LOGGED_IN_SALT',   'W@lmJM~$BeV-.JQ=mLSfW#Ud{Z?i&]9EE5,pJ|ROJ2;N=v@h;Cp.3@CHq 1J;U%-' );
define( 'NONCE_SALT',       'LY}7#f3c==7?-h:6<j+3k]lV{(}@E[],Bj/lm$CTj-@NKfR~xb*&LijLupzY.ffE' );

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

/** Disable automatic wordpress updates */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
