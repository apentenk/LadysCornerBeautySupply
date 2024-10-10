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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u531590886_kbYMH' );

/** Database username */
define( 'DB_USER', 'u531590886_CoIv2' );

/** Database password */
define( 'DB_PASSWORD', '9xQ1lFL8NW' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'vipqkC%I>h}~mgfv~V28QG-b`M0x^/qgrO>qvVA]6.9C=<IsZw,cTWZffGpV}83M' );
define( 'SECURE_AUTH_KEY',   'a&YVkQ*cKDmE`TPQ0g?@k*j>N<B)BNhYn#cl6D :/<J.:gH,qC45hG)`@iY#?FMf' );
define( 'LOGGED_IN_KEY',     ']>2a&[jj#-76Dt9N=<W1a+4#-[rn&V5*|^8Y2)zS V#Ro.$~tvH&j^AV5BDgZi3S' );
define( 'NONCE_KEY',         'cIFzzxmS|25x|QPv3Q}lR(r$e ]70$:3cS*OLZ<XBle7aQF8F5AiU40^n_H~wz2~' );
define( 'AUTH_SALT',         '2;( 14 K{*Klq#3w9r&^>CB^4&nQvl!!RMJb)qT@jj(|?8;49Khmpvr+P]w{VQXA' );
define( 'SECURE_AUTH_SALT',  '}n{(w5W6M}{xJ*f;oRy^+Wta}QYgeZ$H_|Gp_D1,h5T~=|~ I2,}JeHfzJRC[$ul' );
define( 'LOGGED_IN_SALT',    ')#5KRAvGt+`9FSn}`86h}nn/N.7}9(rTMnRX<`tKNl%y9]%)6)IWvkkig`oXI%rM' );
define( 'NONCE_SALT',        'LfV#mnz6R.V4h%r)O1%j5>rJ[TBj>XU_MC$[TR4pwh!w*P!a$6b5)]ebISs3v46m' );
define( 'WP_CACHE_KEY_SALT', 'JQ^/G!Gexi%>z1V(?PpqV*ZG[W5Z-:1(hxIuY5|`Yn&-XN`=j[W?pBv_t&Re{T0}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '715c80ff1408124b84c9a172cc43ca0e' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
