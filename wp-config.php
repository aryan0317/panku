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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'panku' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}{|AA_Y0s`#GE`hx|!:L6/2ju|FSMX^XH:1<v5~n=&`#iO3cAmrO/}{x.|(OXMx{' );
define( 'SECURE_AUTH_KEY',  's,j^bncR+<=uMNqa&V$&VK{ua9GBWH9Q`Ws^xPh M.mCJc>3~{b#Ye9_:9]&E|6P' );
define( 'LOGGED_IN_KEY',    'rE`>rb~17>(`jP.V#pjC 4c+WrJF,wYu[WK[L(_q3C</qk]|tF.by|w0J2*_``z)' );
define( 'NONCE_KEY',        'aQEz~Fk;@_%Da2<uA_/Y*j:4cTDH6rX^6AP>sCf,cPsy}AMyW(R[kQTNHvALoN3p' );
define( 'AUTH_SALT',        '1m<,{:`V4]aJS%=QmWRTc. !LWoMwYM<@?]pG>3jO2a%{xi@9ucj4Ot?ann4D5Hd' );
define( 'SECURE_AUTH_SALT', '?KM%*x2/$,sblP/*RjX!aP2N*`1;G@!h7SLV)U8u)|%bo6=Ne.;q|kIa?IsvZ8C:' );
define( 'LOGGED_IN_SALT',   '?<#r$?leb0;k5$2|H||^o0i{=6/f[{osP*8bO~/S|.{Tq)p>*g]1OB^MDIl7C>Yf' );
define( 'NONCE_SALT',       'QG>iF*Py?+5iCuhAuR-X`aca5-r@wJ/];5zimHBi=Z13]vPc0!|DDeS#w[Ge*2O;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
