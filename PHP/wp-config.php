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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u175161195_jaumedb' );

/** Database username */
define( 'DB_USER', 'u175161195_jaume' );

/** Database password */
define( 'DB_PASSWORD', 'Artemis123' );

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
define( 'AUTH_KEY',         'IWcp2g)URIUFNeGrvLPFbKClzu}_0z*#+ .p(&ME  yINS4x>lyvKw<N|?)rF7AG' );
define( 'SECURE_AUTH_KEY',  'F:dgT,MNphhR4jZ4zGY~s+0R5OyK0^Xuvp0.]:5/ gCN+12|5 #UBd[L%v^_NFHd' );
define( 'LOGGED_IN_KEY',    'b,M%)/cW4cl/MLhN)gR>Nj+O20!^+T2sH8MLA^G`.zhDDrSMuz<u3X67@?Kn-lgN' );
define( 'NONCE_KEY',        'gDbM*OdS8[}`RuyW kVd*9h2tNp-{mVPL;r:J]~(v12P;F;@Czi6lrVE5*qpmkBn' );
define( 'AUTH_SALT',        ':yqw[`F+Bq&R7ltK:E%N~xX)jZ~.Ew|AhWl0_5/=-tQHva2H;-ux~]2[:#+F/NVn' );
define( 'SECURE_AUTH_SALT', 'e-gv}7<D.eMB}!v6[._375~y.4bWWB`v%VSK>KVqW]2`+C,H4emo@+P?VIDk:;1x' );
define( 'LOGGED_IN_SALT',   'nn>f@euAwXq$q+4,?#-]kNY9O<tVna96OJUa>ntz@j$-:->N2GfK`]C~UA:m^VsX' );
define( 'NONCE_SALT',       '9$i.;k28Om$Q tMhaqPR:X&ir-9Sgj}BE1|F=7jQx>W#q%g+8+Gq=m=Vc~V:PC&n' );

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
