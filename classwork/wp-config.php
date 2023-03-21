<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'classwork' );

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
define( 'AUTH_KEY',         'naK#EUEQJw@0`,WVALg:|N>?7N%9:IMui=FOS-Pe0*`t(R{,FTwFgQ{)_ch];ciY' );
define( 'SECURE_AUTH_KEY',  'f!5r^nEC3l++=O0H8HQE)qP|x@IYYiAKc)`WRE~9voloCbZUaA?TdTAHwdB2*u_/' );
define( 'LOGGED_IN_KEY',    '<VsCvmdpYpMHh!uf(N_EKX5(=snxRRfYY>y+O;*KD6&fwR. (_fc> l!Y_?iQ24[' );
define( 'NONCE_KEY',        ']k9`7qVnmyuk[y@:[ru9AHVim>ylz(V13.uK~TH$1vd[2]Vb90~39$B[U%p= KI[' );
define( 'AUTH_SALT',        'Kb|U1^ZvOL9 WG[ih_2Hsuc:`3~w`vF!cuhCjn@A4b;UTTJlSlOM0t.0bDGWj19a' );
define( 'SECURE_AUTH_SALT', '`v[eO(;3x@ep_oba2&NjOKdM$_Y]#LYQN?`OGD:60q^>F`+HT=;TZlFb+x4kN0Jc' );
define( 'LOGGED_IN_SALT',   'B`afdlH{Pk7c*Tb&AOr#P+%=`msg4Jk_f4|o4ZvFhHrm2C,kbf:z>;r]h-Doh W(' );
define( 'NONCE_SALT',       '8~hVuM/tGV. EzztJXtnG0Jbi3(GFQ*AYOMfntjwOrry[[g^%)_rX<qGq8sKJWUg' );

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
