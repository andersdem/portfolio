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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '6Ym!C`,56^Gi&xO(a(a,v+&u|P+_>)l6hw};bbf2@Va 1L4vW;mkINjoWnRgWM={');
define('SECURE_AUTH_KEY',  '|}G9d>m<[g`O,9 N|mi&{}T#,Y(6z`UZjReJ P=uX{f$::c^GMOEwC2x[};PcxRG');
define('LOGGED_IN_KEY',    ':jz#8N^d&U(%6Sw)!CT)t,oEGiy*zO~hzO5bK?}Zeh^TSM+prSWa_+GS&?Hw! +k');
define('NONCE_KEY',        'ezse|lP??80R-)5@S-G=^]NjgV^s6fsRg[pa1]zS,{xj6^)2G>R`V|H8AIx(E:(7');
define('AUTH_SALT',        '0z|E2g^#WjxK-6,ujT}#y9m+quhZH:;?l%b+7Q1s}0,G$]>^xnFg:GD485nWbZ97');
define('SECURE_AUTH_SALT', 'afWSTs|3%mez`S^/q92=h8eXNDH $s.4p=H(G>5I]fdv8yd$Gv(H`{,_@yl5[Y..');
define('LOGGED_IN_SALT',   'mF<ZP:+RG|DCaVX_g:l;OU?g&O1#->k2#PAt[>5;,N7EF<.<M00$JQ|wA+WDg6P+');
define('NONCE_SALT',       'z/Y_J?I{l%-vJ{%*DPa1HUfgAWgRHCYZ/mU+C0`M:op!d$T>p^pnMljp.4SgMsoY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
