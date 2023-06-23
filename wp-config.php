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
define( 'DB_NAME', 'victressdemo' );

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
define( 'AUTH_KEY',         '!wn^RQ$#T+U.2*F_XrlXX$&hOh9I~%R$dr) !;Pn1n*uf/Ig%aFg1M&x 2yO`q^K' );
define( 'SECURE_AUTH_KEY',  'x&w9_!jT2L Kv~/!yU(O9N9hTw7fI,<5#FHWvvdRxd9X[]OT95)C3HQvPQ5@{6S{' );
define( 'LOGGED_IN_KEY',    'ZDsv:nhYABr(|L3<SV,cK!eWAB8^a3bUleEI`Ziya%!yDog8oUc`e-(qpU*?EEL=' );
define( 'NONCE_KEY',        'JM~Y3UYxUHnIBgj FFK&LL*mg2Utik- 1EPQyIWelmQKP^Y`P>OTV6ZW?HDoQ*/.' );
define( 'AUTH_SALT',        'E[a$S1z!6hK/*PKEyxWhwFBLA0k2aQ]LBvki@5!;=fs(C3mBKWGsRVAwU9m._MjJ' );
define( 'SECURE_AUTH_SALT', 'xS0<:b[~1c+,~fF!k!djgU4(kVv>?Dh*4q}AT_`i)]4J1_@B9~~h~):G)wMW4/^z' );
define( 'LOGGED_IN_SALT',   'vOEIaQs20]s8X$dlG3@=$NSAgKIxU_w47I2}(GVUfaH+ry#Q]D`W;cJppn}UHqV=' );
define( 'NONCE_SALT',       'KqgwoCnTIzQj}dSa5,4td($Zu%BeAt=XBl1~<tbg0{CA03_5r]|eT<,UpZ9kh_5%' );

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
