<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '9?nvEYt#lswRfW-P/oV[Yk>UL)_I|ock~TK8xmpUM#t9|J2rGR1ESS-S1h` AMbp' );
define( 'SECURE_AUTH_KEY',  'Oov]b>_n((d6&b=RTL@}<&>uVTr*tdoO.PYNT3r*8<1T:vQ6{korE7<:ck2]FzzE' );
define( 'LOGGED_IN_KEY',    'Q4{KC*??<MVTknAtj#z8hb|Dc1eo3|qg4Hw0ed+_<))iBaY.4])tE9NFl?_yY<4j' );
define( 'NONCE_KEY',        'ic[ckM126V:NYWS1H]@ CUeD`z[GwhM3=)?QBhn)^T2hW$21j73@5QQNH8$2RO@v' );
define( 'AUTH_SALT',        'GB4/-@;Bowj&hRE[m3.{SmL-7xA:cV4z`(wD8>P{f+ ?rZ#ZJu<NC)|xOOQka$=r' );
define( 'SECURE_AUTH_SALT', 'O1?/|)hafFReX?*FZhpcT0$%wJg;8m1<K]Wy5j .m:iW}).+a+ Iyc8)C+xIu=C/' );
define( 'LOGGED_IN_SALT',   'Z;roS)zdNmc[q[OfmUWIR,FFJ%X^O2a=g&nOo|n>gPF,l(PJ1E<a1F4vZtnTKETa' );
define( 'NONCE_SALT',       '(3u-}xQPCs7asAW#SQY:JKPFE&Q5hbX``b>*NajxR$WN{5;mE)$yj;2r.HNPa<z/' );

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
