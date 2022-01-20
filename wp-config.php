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
define( 'DB_NAME', 'upcode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DM!5wCfB~tc@qTl-aZ7$0h2yPG^vK>oKBea~;/6U*PRvW_:gHLE0Ksp6TaQjGQKE' );
define( 'SECURE_AUTH_KEY',  '#!9;7`Cso4XZXt3[08-vnWi`}*7}vIm(px.AocIE[DjmXN#aFv>!&dPVt3_}JI@X' );
define( 'LOGGED_IN_KEY',    '.)n#e0ul&~&z:Q_3$l,};m!7$%,O3 Ig?TS+cfSo8om,o_!iw$}9yvlUSp&V7 5f' );
define( 'NONCE_KEY',        'k49/k.~ZvDZD;/r=)*dOPeH#};tyBQ5Zz7+hXd{]A%9&%%H(C`M/:z-Ijw`oOj;i' );
define( 'AUTH_SALT',        'P-MqcB+ESy6/%6aJR-Jl!7Q$G?JB*su~el_!.VqbH:x:IXie**zzv2@%<+e=LuU>' );
define( 'SECURE_AUTH_SALT', ':W`_4&n{2rW>Tf]%(IYv^>CjgAJ(Fl^:*K M4^5/md~x1,9^@gny:E$1w-yME3KR' );
define( 'LOGGED_IN_SALT',   '#dXmQ6xqr 7Ct{<u~3GjQRNpF?uCFy?pYF<BlSrn(5w^^:%+_?l95@*]]q>K|1?W' );
define( 'NONCE_SALT',       'u:T3e?:#,j25gB&*lRU-$NHUclvGq}IeTs5nmHecNnF@yZ,*T~XjBnix[ZgjGto.' );

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
