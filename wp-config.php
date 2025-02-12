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
define( 'DB_NAME', 'robin-barrett' );

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
define( 'AUTH_KEY',         '{1?,`~Cac2y8*Gq[{Mw]0cWb@Xy<XG)y5AgvTJ!d%NI@#C]17oWYXK?6$0;8Liwo' );
define( 'SECURE_AUTH_KEY',  'Qy&IlN,B{WuiVn`1]()yZ ^P])7N#:VT~!N=?-R@2{X<CxXra/8259K(--=$k#f(' );
define( 'LOGGED_IN_KEY',    'ya9d&Y[a?y$j2TUeS X!41o~WP=i?QJ+#(GfH9fDD09]`a%{Q?4!O1}C,z0zl):y' );
define( 'NONCE_KEY',        '^]Ed~CfJso(]M@hiMQa_|&ZB^UXiKTE}b1]JRHRWkqdWp|0v71pb__jD;d343*;)' );
define( 'AUTH_SALT',        'B(V)3P/9p@m`Xh+KV1D4|D/AB%@G*2&xZmB.;[k4En%{&X?XL)pz->*#=n*hpb{2' );
define( 'SECURE_AUTH_SALT', '3<[Ro5.[X$]C-yIR2W5xd{NN*2p X(:IIN3^~RP`2vRa6w&Iq,ZlfDc5!T?-KU-F' );
define( 'LOGGED_IN_SALT',   '0m0K)uk@6qSW9H#`gO@MpGLO&X=YU5J10JgV.?<i.mHN%)a:bN8:T40ng n/v4$t' );
define( 'NONCE_SALT',       'kYo(.0Kw^-a5LS|^oT4[.O-C.}=E0:%]/Y$d.U<Spj=MhQqZs[V<% S1B>EXSL;x' );

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
