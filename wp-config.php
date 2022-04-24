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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[aGBr[dQR&9oOOTKCIIn3qn~Q<seVxc;[Z@jGWy,LprX1s@]I% lHpgX&l4|/$-`' );
define( 'SECURE_AUTH_KEY',  'w%qSSwjul41N5bHbfDbw?oR|iZXC3VPy>6?k}7MCW(o9,7Oj1ds:KbRBtn>83R]M' );
define( 'LOGGED_IN_KEY',    '#eS6(6GT]y#zKnKRX|~z)&:4jaq2tJ,x[5Yv<5H&BEL.b{;?3^bU48^d&#o^ ~5X' );
define( 'NONCE_KEY',        'j9NLwqZ7Ak+B.g3j6Q5%tf{Lc~y,HPLQlnm{aKu,0p9#Vt!j;bRY:18x{1:dM]{0' );
define( 'AUTH_SALT',        'dv-dc3KN.>BfSFzp!hHZ`<8zDTp?_4:6(sK>_s5x8QC$AMA(K44~aqN?WU@o=t4.' );
define( 'SECURE_AUTH_SALT', 'bhgJiC&CZN%)Zmil4M eEU1%+NfcB/G/r2Ii;=qK7qAr}o,W.T/OqWy7O8p_#yRC' );
define( 'LOGGED_IN_SALT',   '{Fx4iJtBpepvT+Cp&dRGhFuOg/,K/Y-4WyoA^Q,-@HB6&s!wsX ;q6kh68;dU$lB' );
define( 'NONCE_SALT',       'XwON@F]sz~O3X$O6.8g(/ZX</@R.fx3=wb#5Zao%(=Lc;0IpAF*((>6VY^Od(?Am' );

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
