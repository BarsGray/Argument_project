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
define( 'DB_NAME', 'aspectvrn_argument' );

/** Database username */
define( 'DB_USER', 'aspectvrn_argument' );

/** Database password */
define( 'DB_PASSWORD', '2vGihHvQ' );

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
define( 'AUTH_KEY',         'tgVq._^q!$XXtNDrI^,RMS1vrF{$Xm|[KGrO;h?1B>d-Y;eur|}+ge?N!(8X ^|%' );
define( 'SECURE_AUTH_KEY',  'AB4Jc/RVo{B%Ht,XP4gcX8<Ah3C(59t**?ks:AJkd&kS&lJ@nu=htzfqHM &vR@ ' );
define( 'LOGGED_IN_KEY',    'G{2xcKV>xuua i|.5[K^&XoN7~7V,x9T+[x~rQ,=Y.E/pScQWIVWJqLcG41junZT' );
define( 'NONCE_KEY',        'yFC>UO,hP2 2.{tBX3u& :<}Km7Ia3}S/$%$rD[II#_xAUt3>##|<uVlt_iclwF|' );
define( 'AUTH_SALT',        'Qk^AD#JVLo,7.1T/(^7kNwT|#Z ecEO{1n2%$hO9hR3va&vMd7:P<x4!*#}X4$@~' );
define( 'SECURE_AUTH_SALT', '25RA~-Q{bd1&E.0|yK}=_yaQ,#QhU_>lQ_v|>+u>@(hqBz|fnW?NEO$V);FcN{EH' );
define( 'LOGGED_IN_SALT',   'g|]g?{9Xg(N6OR-X%O?$1ylFT<Ajh]J*F@i^y0W;7!)3djySh(viL^- @}YS^6xo' );
define( 'NONCE_SALT',       'O_ucHIxblZYX n?l=w_iaobXE,t|~ZkNV?G|>C6}f3IgB6JofJ#k!)IOwyYE~+p+' );

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
// define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
