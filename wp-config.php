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
define( 'AUTH_KEY',         'KMNG|p5*<YycS&{_{F$BH`AcWU%/M 0KjoO7}EBxrOlG|FNh7=q*!>8]hY3v#^S?' );
define( 'SECURE_AUTH_KEY',  'Vihw1JMd`!^&6niiXC~)JyAqcq1jSBKx4:J[*HF=MqT8IKSWg]jC+#xT8rjl7(|L' );
define( 'LOGGED_IN_KEY',    '-0kriVMf69l.KIX:du]dN!2x?:v/NfCR@/|~lRlbRZ2>AOyHtcS#ESSU6({MUeQP' );
define( 'NONCE_KEY',        'nRjfF,i(fTw {/AXPdYc%H~/V2K$rJyI0Dzs+zdO`A#9E/;b<9o)N9=,Itl_mHBz' );
define( 'AUTH_SALT',        'PCqysT_LYO@)9<)<m`ebbXFX~kj#Wt_EEqf2$Ne25QyH%mVOcI+tBRX9}#7P&B%z' );
define( 'SECURE_AUTH_SALT', '~az761`G+m<udQaF=ZQk.a7<2!.nnE5AH:NGAW|6C]>zFUVaid&K838_}o|_kO3u' );
define( 'LOGGED_IN_SALT',   ';b`{by180H8lA6pAz9(z1;fm/D`}x=xS0^x$St{,V)*N%Lqd19=uZ1|ka)tV}NC{' );
define( 'NONCE_SALT',       '+*NBe:@R|.cc|vHc~owO=Psa=RCf;K!nUaS51+*}+^3-}u)7K5oK2CCk7!j>8s+N' );

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
