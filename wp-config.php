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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'book_katta' );

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
define( 'AUTH_KEY',         '_a@u&hnh]%V7b#CRA^FGZ&?}`$c_&%{^IE$h<kdc`Wu%1MxON3vAb4#rZ0L)P`o;' );
define( 'SECURE_AUTH_KEY',  ':<)1%PBDrcB|.wAoU8V#]o,9 cQe&I1wq^`kn}h3}I.71Pm.keD#v.|Ba0Zf]@?}' );
define( 'LOGGED_IN_KEY',    'Ev*;b/To:hP=x*8/Wj4cIdhsx}vAqMM*WDaN(%zoA|x},gAhN&$8J`{+m*KA(94z' );
define( 'NONCE_KEY',        'Z!X}+4V@sjKvXCj^8 ~D_DEg$D{Ng1qD vJ==.(/bUYJt#s[bQMD4^y3f-~V/Fzx' );
define( 'AUTH_SALT',        'e3gaA16H/m]C@.*^@8eGm&&d_oZHxS>~bgU$Z2E]47og*t0aY7xP#(6c?wn#H)|u' );
define( 'SECURE_AUTH_SALT', 'k| d&X+~M5sV8VG+,m,5>?Nq!rxt%`?&zoN`DOD!k*UcKZL*$1gxxkl1f|8g/YKB' );
define( 'LOGGED_IN_SALT',   '!R:j=W_Wh?P]kM>Qt/1/2E>r%4<$qfuDr4-A!Z/9bX2pK1!gF,rUGSt5/H`4sk:0' );
define( 'NONCE_SALT',       '(j^FjdeS!Yj)h>)PqiIHkz%&WQK.qyV0RR5DQ57)En#~=6/lI[~T)N,Hz-#L@nz_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
