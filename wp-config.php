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
define( 'DB_NAME', 'centro' );

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
define( 'AUTH_KEY',         '>3Y8RQV<zt(6?Ube1)TXx-)2GF}vo_Ae2s7V7qt,T.q (v+9,#w[^iB`(L>]o0%n' );
define( 'SECURE_AUTH_KEY',  '#l(.@C#ORl(!FhzN^7MU={!VG^>:FTr~&:t[bXwtjspiP^M88h+6X1{J6s~rqp~s' );
define( 'LOGGED_IN_KEY',    '.y5R;vLN]Gb-aD0d1r_+3WIlEG#>a+T;6{dm{E_9Kj0>7wLarf$DmPD;U!%S<q6.' );
define( 'NONCE_KEY',        'R!~H</9dDj,--l>37oCd..n%kiNOn)|p=E3vclh<fk5d^@9]9s!Bxwk-r/Q:Yf$X' );
define( 'AUTH_SALT',        'Jx~,Q. G}8b!7,Bnl ]k6cE}RO.5dlN!P3Kt asOIG;#Cms<0G4L;CUH)1%klWk[' );
define( 'SECURE_AUTH_SALT', 'a{F$%DF|aW,(6X~8U6)CYF51r?^SI#$v)=r<J|jF~U~w~Mri3a(El&at$Ix5:&iN' );
define( 'LOGGED_IN_SALT',   'E1!0Gtq2~,hoP/Q#%eCS0gzX91iUh1if?&nw{l|S.VmzQ&I^YiG@JNTki+G`U}?v' );
define( 'NONCE_SALT',       'yG,jnI3rYM,z%<q$zt=t-A/?e8~HQEip#N:b?hg~`E*FBa4U </=ugUWJnQh{4U9' );

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
