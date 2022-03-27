<?php
define( 'WP_MEMORY_LIMIT', '256M' );
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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'qm0SRUpl}sG{+i@1V-*=JNeb#^U)K!eSzL3T<2(DUHV)0mOnF3Dg5zs @oUN&MPM' );
define( 'SECURE_AUTH_KEY',  ')AB1vkM6e4t.~%/m;xWdD9*`E2jeY:%kTE*L8XlYVLKOfz#</>}G82ZZ8@]Y,M/ ' );
define( 'LOGGED_IN_KEY',    'aMcG,[:X>-<!!]A|G/M$psEmq1OqAqBf}cJa5^-(&+GUIQ&nUU}kq7vgMEj32{d~' );
define( 'NONCE_KEY',        ',*V>&%eiZc[wdX5&@~^0</a_-|sfGP[h6xL!/qB*^}Q.zp2/Xa>6.P8T/xB7TGmS' );
define( 'AUTH_SALT',        '&Lx_.;slFL+`sil-pOpeA< ?+7/JUObx3m~?~(V[}y%$;]v7()hip>FWO9TBtp~8' );
define( 'SECURE_AUTH_SALT', '9VmreJu|92o,!-SSQ/d0i<c~DDJc?y1qU2WpR8uOUWG #Nqp^@=Uti[N03Oam=DN' );
define( 'LOGGED_IN_SALT',   ',J~:?;}Gs55(awg>H)WOim_+>.:d3`1r*&YR@:`;ppw@(%wtw*.([-!GK;C>C=T:' );
define( 'NONCE_SALT',       'UxK?Se%` 9+aQJ~dUP=!s:4he->T+!h{/]Qz~~XE+D:]`N]DM[EF77Q(da*=6pgK' );

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
