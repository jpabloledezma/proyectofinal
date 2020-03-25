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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '0346414f0e3fc33dea9e82d5f1c26913aaa305d7e776391d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'L/dy)X}tSYi=}E5(@.V([ 6EmWf#d@4G|)r+w^>w,Ur*qxA*&5MkU*e4KcoEePj*' );
define( 'SECURE_AUTH_KEY',  'oV}]% 9Bsd,%P~lM_B9*_B:=XMH>lgp$,{i:F)zS0zjqL]k@/Atq|H)`x{>{[y|j' );
define( 'LOGGED_IN_KEY',    'BsI}mZ4f/fFpd?PmsnJpn>8+EvH{xV&QVh4Ma-;_`=XpW=B4)0%[G]39hF]kZQg5' );
define( 'NONCE_KEY',        'afr=yar;n9EAHqR~y})o#mqU;rK<6=/XI_Z*/+Vv3AA@&m_MWvE GP4^2[FyfD:X' );
define( 'AUTH_SALT',        'Kp*z(qs8ZJ;]|yQ=`#6iT@ExbV5u^3j4v<P`?dFnSEx+Pru>#3=tfT&:0C{cfggi' );
define( 'SECURE_AUTH_SALT', '1S=U]D$U0]oX#_Cz]F;(7l8DO=JT:,8pXK_]eY56z(r|N.@LZG(Rp#Y@ZNA.%saZ' );
define( 'LOGGED_IN_SALT',   'E9CJdH(8QX1D8f1a>t?vx#}ao&R-%1,Z_m3TJH~eNB4op#EP=5%,]51oSiMKAjb~' );
define( 'NONCE_SALT',       '`J33-%~*Y?}+l!-<?WY[y3PsNz~-v&zh/h 1IXm=h$9vo8Apay$MH#9oNWFG*Ggx' );

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
