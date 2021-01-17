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
define( 'DB_NAME', 'ambulancias_amsa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xuY|s_I}lx6IU|~Fc1*p_J_i@L +?$IwU_(,.c*K,VkV>TH7n:D_99p!L*7xJ;G|' );
define( 'SECURE_AUTH_KEY',  '{j60ACI(LmnCIO8JCcv&Gx<Sy>;J,ScaCx^bP4DP&5V>yZ7K=L]9Pfg9;w{/=-,O' );
define( 'LOGGED_IN_KEY',    '%z.6Q3%B %}6V*9R|eG^ 3z`UIe54)_K??|t2{o}5>F2k$yf~o=jBVPBj2w7DZnI' );
define( 'NONCE_KEY',        '&Cf=7d.MD<D_-&sr3Bx~v|;]Q)}sKUVTT+k;0<<$A-/27btU~+lZYC||Kj=vy!5#' );
define( 'AUTH_SALT',        '#iRj1*u9W,8^/{.]$8[rPW/v^<?p3Rq18.QV!4#5sq5}Za[cF}H?`+jG:[/aB![W' );
define( 'SECURE_AUTH_SALT', '}IVg,>aI;:?ARY79p<DZ$f@%dIxEFS+!7W}+=PjMXZ|+J{Njx_Hm`LE+bXh[`W!i' );
define( 'LOGGED_IN_SALT',   't}3K0DAKj ih57K90W/XGIIOhi/_-W{d)p,N>kfzD5-f?XHiH#@dwE![X|sO2?lL' );
define( 'NONCE_SALT',       'O?OA<nofD4)K5rdh);Wqr0%-]>4!^VGPc_6@b_[Wz2<vlw3?G%Yi2?ipK?~wDs>/' );

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
