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
define( 'DB_NAME', 'wp-assessment' );

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
define( 'AUTH_KEY',         'nWu2:1u*KMq B7BtV%Q y.uJR3kZL-O^&TwiXwH}Td%K!sT@Zum?vuJ!C^JH?OTX' );
define( 'SECURE_AUTH_KEY',  'S5t.?~(|NX_65<j[~vnM@dhZz=VeosFtDkMw!zo3D#HZ5PCZCF9&,w6k:fdbtIkh' );
define( 'LOGGED_IN_KEY',    'WqpV~G9Jo!7s_4aaXAVf8I:x*B+4cH0v~^jvq}CcRIK4T9t4ky$z[}$(=lNnNQ%5' );
define( 'NONCE_KEY',        'AXY.T=BCGrGX-Y;a(&!:9gOBF@kvR=7*gSU 1Qb 0;zU6CL-c52c|P+fo0m#9!cc' );
define( 'AUTH_SALT',        'o&9yvH82uY61B|M9,m6pmTx*Ly#$v}zW AK)b9)kYU23zbqUKDx_1E>s@GlmE%NH' );
define( 'SECURE_AUTH_SALT', 'S)3Chi^=govb2i#sv$]pP*VE;&bL~uwn$|KFQ&QZvFm]$YM+69]AIq!Z9emW`ksa' );
define( 'LOGGED_IN_SALT',   ',^ >>.,h!%FpJ?[cF[lw=&GPC[HK;C*i*L51G-%ER}7*_et!nR&=oe~HFBKdrU!h' );
define( 'NONCE_SALT',       ':cFNgSnV0D=w!Nta=0%|4 m:Xa9P(-Z]I5!r!|9tJ4~%Nk4#h3(Rms1xz*2Ijlmf' );

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
