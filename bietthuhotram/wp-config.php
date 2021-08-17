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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bietthuhotram' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|TYKB&7CYCy}KNX=~WJ:8~ kJbD*BALz#tCe333y/i*#L{oBq%,[/1BMA@!J/>W@' );
define( 'SECURE_AUTH_KEY',  'W~dZa9f{F$ergp5|O{%E7AAjl1 UP[&dAC)2~)};z/cRz7/bm0{bg|:%706T99x(' );
define( 'LOGGED_IN_KEY',    '<c3~F<F3AW_S}>}xrWN{G~4pCSO@#.A-j|#G#sRC{!.O<WEOAsX|5egYv4]eO7=+' );
define( 'NONCE_KEY',        'zg>riPrhJwvdnE(k??v;5~^=fqmF^mKKEr-0cLC[o-ez4PAG[3Tq0>vR9&=aVp K' );
define( 'AUTH_SALT',        'W~ir j^uXnHBp=WE12|1=GgX0}%f :lxH> jGDf#!P*hl-9@^0r[`S.IRG?kWQ6[' );
define( 'SECURE_AUTH_SALT', 'C+QUX/5k6F*>t24HP^{IokRvAtn,E8D$T0B$j@n).SxwSFsU1wDULd{ofaXfnCM=' );
define( 'LOGGED_IN_SALT',   '%@ /gC$OTS40?<Ai1=s<6{?W*uh-YOeZ1d<uCqaiFKE_4]>w]zcu(7WgEbJ*Thj}' );
define( 'NONCE_SALT',       'UoX6~o{~2kI}XNfQ?Z1tt5`Brj?zY4k>pr/O?#e#I2FQ2*pHvMVpl/Llj s u12#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
