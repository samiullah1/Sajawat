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
define( 'DB_NAME', 'sajawat' );

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
define( 'AUTH_KEY',         'K*?7c!@>N(g,O042cw3*$F4_x4%Q?=g8dI,K|HFvBepfD 7W^vae:SvTXh_5FqJq' );
define( 'SECURE_AUTH_KEY',  'J~KjHBt;=MQq,bFCMZhTaM>-`6IQaX`<A_mX{Y}aQ=7.)&%KS>8Q(8p@!,nMPDal' );
define( 'LOGGED_IN_KEY',    '9W>x*8mOtjku9vDQLQ]I|GY-_,j^WeYo}EfQIe}uZ6V.g7X<vR.95%n $BS)`cEj' );
define( 'NONCE_KEY',        'Rvo<t?3`}A<jJYX,Pa1 JNxg5asJ~sn(6a$4NqWNPhe8MEcPr7m!CYn0#{=|O&u;' );
define( 'AUTH_SALT',        'P-jenH5j1chbwXB#*5jsM>B0&:p)5|G+It5zPP$B_g&YtW0&`Xctl;*UpN76p.D=' );
define( 'SECURE_AUTH_SALT', 'GfeV?L?{%2nwSvZci(/_{-(1|5_Hl$.CvfgjLT+BYL~Z196:C. B,e._f#C*,^7t' );
define( 'LOGGED_IN_SALT',   'KvmfFiha|+ByRb#E<(0>m*/MP*Un}P7g-h4S0m/!&z+/5Z%w&6,WE|{U>R0y>6Z{' );
define( 'NONCE_SALT',       'VJiEi^=i4sT!x2uc5:j)o1/{b16QS^Q_V&4XmIwC$(h(2H~cbsl$3[+Nk|R(;fM,' );

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
