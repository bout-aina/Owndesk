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
define( 'DB_NAME', 'owndesk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'cM;2J~l-!@#q`RvJ+i!jTs:*xS?7zm{1c`7@Fy{LMgk2VPin|LP#v`Q=]^lM*jn,' );
define( 'SECURE_AUTH_KEY',  '%I=Q?N<z:+HnQK7Z>#{)Wlp6nvB{% U$/t8OC8[Sw,zr{izMAK2>YO+^0D/mn!le' );
define( 'LOGGED_IN_KEY',    '{dGoUmCBE5IC=Z~vAZG_xPAx,%Wha:jI#Gbna&-2TWc3Dn-.v-/caX[{:`#&1Byy' );
define( 'NONCE_KEY',        'pN;xsj4nAXKW#ZdT4-;LEC79Y7Uf u]6S66Q?CMW)Fjlx25sBANvW0ZhIvw],8wg' );
define( 'AUTH_SALT',        '%r@ ^^bq:Y~N@w2u+naVX*%?)d/]@>hefl 9$AT+CXrZiYkx7Xo $T]2xBAPjR*7' );
define( 'SECURE_AUTH_SALT', ')>oeDr10U4?|%;`j:OfnmN}J`-8!J,fG4[vW)SHlbeP}l,lJ*j4uZKFViW|cL5>Q' );
define( 'LOGGED_IN_SALT',   'PyGY#ipv+V}==lq&A4d4Q!UHng~#+bmvm*2`cNr(!G9u>gq(vekY3(1+<LVzOk#2' );
define( 'NONCE_SALT',       'W/sVl7St#Wx1pe?Ftj)2g^gL&|E8<,7P|UyhwE3?,u8fWMYB@Nj_F_qGlj;f7_,3' );

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
