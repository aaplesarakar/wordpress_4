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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_04' );

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
define( 'AUTH_KEY',         'Fdbm_=_Rza~~r{`]ZF;2TaVT1uk%>Wl6NU/4t$_ce  Dd)^SNT(UkenMKdf_{B{l' );
define( 'SECURE_AUTH_KEY',  '8B% Z:{/U)3K+fH#~>^W6GvH_EAb&pb>VC~s%D9k6?sLII5@)q.7YZLL?]B>Fd40' );
define( 'LOGGED_IN_KEY',    'YrS%=>eIn8B)I`F||3IotBbVr{TzWN[izRG?@nJJ!*{2&HNyt$HwCR+;u%v^vZY_' );
define( 'NONCE_KEY',        'M !DOpjCQ^cxa{T96Aj%W)$$T!6}a= Yt3_N#vKxF_rS!]ADq/)l&f?tlUI<9wD3' );
define( 'AUTH_SALT',        '?ZFxnnI5*v$M32E;R KX(;C_i=W4ac]]bY2V#l:Y=|2rl|N<;2Xj4$9e{kkWn8+A' );
define( 'SECURE_AUTH_SALT', '*OesA9xrG#s|XG!LBV[7$1F_|e-y2:v:,y1?32oo>oxMQm@_B$2kzlI];X}&eh U' );
define( 'LOGGED_IN_SALT',   'Y9v?;Ae(HVS8<bG}fIo&rH?U.YY o3xZaDh5uJvtg|<m40XuUVL)E=bp3^DES>_6' );
define( 'NONCE_SALT',       'H3i$K!#2CBkxvG.^Y9;kZs$iyt1{S=F|Wj01,6t<(%TQ35^m]BS>::J:;JH?n,qs' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
