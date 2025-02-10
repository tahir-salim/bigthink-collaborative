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
define( 'DB_NAME', 'bigthink-collaborative' );

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
define( 'AUTH_KEY',         '#+4w#X&jLF)>s)^}zBSgkk;0#5|N)!0;[G~Gl>U^;,1G`=3h]I?HmE_:-$8`%iTE' );
define( 'SECURE_AUTH_KEY',  'qGQYiROWd2ZSgR*73Fx_SrlTJ3Su7N$Fw5LSx:1tu;B_OPPM*3J}cGY?`BhT:QFM' );
define( 'LOGGED_IN_KEY',    '$q,BC,+u<:GmI9eBtP#E<&XoilJ0K:xuu?>cJjg:L1,!Hx~%Db#:8E$w1z@lo^8+' );
define( 'NONCE_KEY',        '<<}~}nW:eTVs_(<a] w3&SIT=f9c`{z4% owOwu}5],48/W3Z%?)(Xsh6DO=n8#O' );
define( 'AUTH_SALT',        'H0Rw`6Vq<bxr2xQ4`D|@>b.aqM2T>7vk6fp&,WTO`;9`^M_3vN,ut7gYOdj[];|B' );
define( 'SECURE_AUTH_SALT', 'xr>GA9KM2naUZ4F$};|L*:E!-)czO^k^U3NuA9)Py*S`;)H Os@4r~4^Rpa4$#EE' );
define( 'LOGGED_IN_SALT',   '=hFdWP{l!x[#;%N>e*&SGm+d5qxFm4W^KvBL&mpGM,>Gs.Ym(YYvSX-(B~rfVs7A' );
define( 'NONCE_SALT',       'oy@Tr@/[ts)T_bYehuiC(_Lnkn6_!{5nPO>c4mipkwa2|aG#?wKV[*a*xSD`n&gr' );

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
