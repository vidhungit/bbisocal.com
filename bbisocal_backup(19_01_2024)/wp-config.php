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
define( 'DB_NAME', 'bb15oca_livedb_new' );

/** Database username */
define( 'DB_USER', 'bb15oca_livedb_new_user' );

/** Database password */
define( 'DB_PASSWORD', 'bb15oca_livedb_new_user123!@#' );

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
define( 'AUTH_KEY',         '`2~G+b*fv/Y G8?c,%En~g@v:uHNi~GWzD.{}v-Wb4`>@-3nxiB:Fq2yY? VCzx0' );
define( 'SECURE_AUTH_KEY',  '2+Nzm_`J7bC|X|yXRC00,;UU!POLEOZH:c}&K[[+@@hXEzTTh>K;Xf3.XU0~F <,' );
define( 'LOGGED_IN_KEY',    'BpdUz[[G4fl)p5c`&V04$,Na(o`V|>O!:^$(uVwVMBI<_Ts;?mS1tmy F_p2ThD3' );
define( 'NONCE_KEY',        'Ue9L!2_}X&:T3nKY]~K2#3%&jWG@Psxshe:Vk%]a1pj_p7>AwVW8<4}@gvD23B1)' );
define( 'AUTH_SALT',        'BJ2bC^t5T/kYYa*0HImQiO5/N-50 %~wY3{l5(kxEmDOK}+neck4yR*4{m}zxIj$' );
define( 'SECURE_AUTH_SALT', 'xj>ON$ ^!NiRxBn08?nsN(Rc5$#vZHIWcwx>VmAGX5j,XH#k;v`0$P{2/c;Ngjac' );
define( 'LOGGED_IN_SALT',   '<dh#mLH&$3UgD$d9E^M6V2l3sBMP16@&LRyVq_W[F&hZNfgSTT9w- tei1!,ie#r' );
define( 'NONCE_SALT',       '-`a}_rx #EB^vB[a[+Vn g(QR.:dYa:LIi3zh1xB%~)wiK~Fk}Yk<_r#t6*l|-lR' );

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
