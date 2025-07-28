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
define( 'DB_NAME', 'jornadaempreendedor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'D2 l=}zqlInsfTPc,-CoOKf&lws]|UxA[,9qz{L#<z#:5:ZRR:f5JHwR44S/,bf!' );
define( 'SECURE_AUTH_KEY',  '`7Ddo<dxs>%WAq_4OCI!m!>h0L]u:YD.I_%x(L<<iK.=}AzEEo?ITVI:M?t8,w_q' );
define( 'LOGGED_IN_KEY',    '!p<N m0lH,Q.-HSSq6,g@snp$teTP3z#pn3:dGl:`e)x_,INe<=Nz3k1XeyT}kct' );
define( 'NONCE_KEY',        'h$RoHVbntAnc%^NnX+ZDu`v<y<*nidshyf`|aueM|0)?maUf[<x}ahwI!>:J2VPj' );
define( 'AUTH_SALT',        '}-:?B 2]I|B<P|_LeLQ;l_ZTATgY;S<!+l7YUq*H7iu8KO<{5;ps-Eg)Dh9N#[,$' );
define( 'SECURE_AUTH_SALT', '2!C_2D5FJKQp[@(,HoV= Jxh!O=~HbB}8}x1tH_0&amh250H/u<G;cL3}&7#Xa3L' );
define( 'LOGGED_IN_SALT',   'yef1#]P*;~*Dkz)P*R6j(8|XwLf1Y+}S4-(:KT]|-RiR`WXIl>~Fq/OZH/O|uR o' );
define( 'NONCE_SALT',       'wwCWg2xI[AGY*),{}-%J?p)#>f,9;y,#o:q$R!JD&RmF(FSB>{Xy7XYJem=1XnDA' );

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
$table_prefix = 'fb_';

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
define( 'WP_DEBUG', false );
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
