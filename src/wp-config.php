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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '>kCU i![^TbL*R+fPJQ eNnIa|Rm^nKz?5VLBpy&3lUX(R_{khaZx]hvG-NRYtDz' );
define( 'SECURE_AUTH_KEY',  'VQ;`2p$*V6{it!r-ia[h[>Yn)Ds69zH$p/rns*f7~+[<5A0enh[g=sH{GpIDVuNK' );
define( 'LOGGED_IN_KEY',    'zKp_8M_UDgqAY`D.$S~#O8STFLD?qK8&93F*mk[)ax@mGnD6;*M@(`y~|Szw5<z ' );
define( 'NONCE_KEY',        'qqyNI4%kdGB57zscA<YJ_AZsrBp)N.j`:qW@g=g}IqmzJy}#Fz=92kLTIZT-F``W' );
define( 'AUTH_SALT',        '_LhQi+sjB4iL_^?G?g?/!)P3ZXBH(dYFrkRc[BRQW-TqElbYt;6x9qaCl}gtZL|P' );
define( 'SECURE_AUTH_SALT', '[%Y56;)w/{0JEmK=/(4f!j$PaEkd[ovrt1l/=R}%9MLi~KpdH|mSdni^hc/0=,`e' );
define( 'LOGGED_IN_SALT',   ')&/}9DGa?l(ssGPM5$P}IK+E}iXnzZ!H5%ACY*|j:Cey@;n(fmDa.h]_r/jN!qJ2' );
define( 'NONCE_SALT',       '`TPj[W$x[apfylR+TTwwv2:H~l&Qp`|PS-{TV1oWI!W7]z,]}Z;OfVo!J-VuBnO)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vmg_';

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
