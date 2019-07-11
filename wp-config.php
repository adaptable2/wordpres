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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebapage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         't!>_giD#KdTX^OZBI`*nr)LF+MiE}v=<^I}7!-{J(;H/wBj*ykL@Jf2.!K@+4bN@' );
define( 'SECURE_AUTH_KEY',  '27qg,S^ZwcmGmkG!Zq/}dA{Vn_*~((o#Yk|c,rm6(#UkGIAB^vY4wju[:GK[ommR' );
define( 'LOGGED_IN_KEY',    ';j1(#Umus>x7pNh]h.0a>YZO3Hm9Gdjd%Hxhr`S,v~^km1o{!I@XQ-S<^kYLa)2@' );
define( 'NONCE_KEY',        '6-0Oh{:H@iKr/)mn#T=p#^0MhM@o2$TT(09+[JYY6tBnX} fkt;/0J[2;188jHe?' );
define( 'AUTH_SALT',        'V.:KZKjgA]S3Rnu;_p!:!Aj>Irvd6G<:H#118Ev8WcSbwy4`S.v;4#RG@DJm0gyC' );
define( 'SECURE_AUTH_SALT', 'Z;Y8Ij.,D=z0|c3/#~DTD|<Vf>9Q>&KqVKg(Fcry>Zl8PsO^*7jeH]7~9Gl#Er+p' );
define( 'LOGGED_IN_SALT',   'IWI(}Ss8g$jCMY|`uB+pV`Hkp}HH4pFEdeSy9;QV,pw37rH]dQjwnEpOout{?Rnn' );
define( 'NONCE_SALT',       ' S/Ws[F%@*3ogk.yg$0gxn/-[rT)f}]%LUQdD(_.w _g08#r/y=?N%S_mshM~h]T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kase';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
