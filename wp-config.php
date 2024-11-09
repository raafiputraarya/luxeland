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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luxeland' );

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
define( 'AUTH_KEY',         '`&AF,2qCcH7}hxT4pq7YW!b(20A3PN|,MZ%TRFD}Bw[Zl}rT%FYxd.iU9#kC}/r1' );
define( 'SECURE_AUTH_KEY',  '46~^%IPl (*m=(Rv&>B4.ZHU_e54ev[HJQ&Dj!l~)-?J?`N6<&Jy$WnL[Y18pza(' );
define( 'LOGGED_IN_KEY',    '*F7/D%nFiB)>ZD/_.&O~xvO@;vRyCC+U>K>q.6-n;m.MAsp$FWc3m}74PmUxT8C:' );
define( 'NONCE_KEY',        'C/8_Z.hhw%/vqJ;P$uv(o?uFHxL4m,d/AIb}rLmJ~pkf*5,iC-gpC0L8ThSX:9V~' );
define( 'AUTH_SALT',        '@q8Vb-kF@<k2Y)$LPsl_;#}HxCfrKs7AO*@&nOjW=pb-Y&U5w;0t3htB<zztIS3{' );
define( 'SECURE_AUTH_SALT', '}lE!#k>|s93OvnE`nksaaG|vt%J#Q_Ty>!S1wXSi@gk1.7NqU}O#(36g!0?Ep AF' );
define( 'LOGGED_IN_SALT',   'u;V;F0Mrp-!U[xYePX2^8pjZ{foH3w#5*;WArj;R;shV%rOO<fZ<begxW(xBz4=`' );
define( 'NONCE_SALT',       ';uMTF]HU`1S}nZWF2w=SAH@1sC6,wzQd*v*j5K[8Uf$sT?]>9HvkLEN6k+ fu+2K' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
