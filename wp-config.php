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
define( 'DB_NAME', 'jasml_db' );

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
define( 'AUTH_KEY',         'QkfYNm;K&6KH{v>_](9A#}<MY:JoUeGGcfUTXS`TffXKl`b~F9-V3wOUB8!]TwAK' );
define( 'SECURE_AUTH_KEY',  'iv*~&k_F??vvtx-BKIBD!F(t?H$,/T1bxx$0C3|Js)x1yoUNgHQsyZ8|tbYBojJ(' );
define( 'LOGGED_IN_KEY',    'RvQM/<arUcK}iK]EC,jz7={waN1eFNU5csN[@Wxj5L??U#g?B8o91z(KA/C|JmdZ' );
define( 'NONCE_KEY',        ' 3Fcx?6g6,m&i78TvYE]u1O`|+PIIWoZNkrkhQT8T%j_eNC#&Vcz5 Ch?gtPVd*n' );
define( 'AUTH_SALT',        '`}=oJeJZM|#YhFee3DjZQ]z#70ZrN4ydcsomzHWzdpMA]lYyySvEvG&T.hj[.77B' );
define( 'SECURE_AUTH_SALT', 'kzwKG5!O;$/C4=`zCk$Y?>aeHLV_!z |?]==Dy3h][lb9YNLA>N8dfhy!o^w[y01' );
define( 'LOGGED_IN_SALT',   'q9ap6}/N!Du;^DNKFz.<$V6@uPbNoNu=KDnqj*Pa7z`IMpY3`qaMELO<J:!i<!sM' );
define( 'NONCE_SALT',       '{AAhK@1Yc<4J-* )}[lFo Uw?Ymo^/qy}*eN`SkWT-nX+,bQ&hwF$^01jWI?|n;j' );

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
