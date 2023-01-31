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
define( 'DB_NAME', 'cloudin-product' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Jayasri@23' );

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
define('AUTH_KEY',         ',|g7P>Ci`9+!gU],_-?=Jydab/z#@W.KS-c-:(-3+|+$?zWPY-/>X`D}<G0>z Qc');
define('SECURE_AUTH_KEY',  '+6ZUjcU2FKGUR&pzabEgIPxpkl[sN1OG#:V{Tn.6PJN3KmhC%PzcJ,.;?H?Tk|v!');
define('LOGGED_IN_KEY',    '!zsU+n6YeaFyh2,} `bVdIh*lgd!SyF=B1;k;;;Tv**uu bCU[R6h|$;nn9(aM;.');
define('NONCE_KEY',        'U$9d+ ,|F+5Eo+XK#3::@HQ3$9e)-mYNYBDO~O>M>zhM~:`*q#-% tH|-#IS@K$-');
define('AUTH_SALT',        'j8~Eo3qE0<{!UBrLAW<0[Y(C?U2UV`3 (,|9>R82h%U1,VQ$h[:0qk==g+eEE+^b');
define('SECURE_AUTH_SALT', 'gU*Vf=zk`KJL;-Lq/hi)ky.rT/kjuT44nU$&:2#hN-k? .}X/J=-UDG{xZAeZ&aE');
define('LOGGED_IN_SALT',   'z;|eKrEp^$@Z68xjR/HPlUUC2+a*SFJ&ejH(&X!D-+!r9~+>*EoH/18{+/lR@Dcb');
define('NONCE_SALT',       '7m%xnnC+m[7341|Ta8b+<qZ814AJ7Krd|8RE.~J*wL#^6-tH?4TtmMQq9|X5u+KL');


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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_DEBUG', true );