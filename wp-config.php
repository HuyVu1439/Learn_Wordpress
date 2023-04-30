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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn_wordpress' );

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
define( 'AUTH_KEY',         '- hnfn-~mg N-Bd-2. Fp9p<({`96rtZlo63jV%QE+5s!_OG/zbL]sb@3xPo2vr=' );
define( 'SECURE_AUTH_KEY',  'snXw>(z&&1oW,;|,PLoKD#RJMJQDI!bcXo$8UzWM jT{f#PI=q2?sd84~7@%N{j.' );
define( 'LOGGED_IN_KEY',    '^@rT09_JANbV4y1R3e^fPRWg 5|9b3{(kz@IZ$hZ_GxFDT<TPPs~`Ch|O|,]RQZM' );
define( 'NONCE_KEY',        '7VCN% J*E+{jNg2~%*c3.%}{1i]R7XA$67:R|]Oiry.&FINe*`>b{J:t@ums?j01' );
define( 'AUTH_SALT',        'IF`uNrT?WZ54MxQ6{_3KE{OO<@Ug*.rnO-%kDAo~9vRl5ZmXOi#fXajl0(rPteBc' );
define( 'SECURE_AUTH_SALT', 'o64NjLW>8,$2S$I  9D|7^87f?Zq@|b8+B8K1k`pT{m<#FMa;9a=P-V_n1(Q+Hc8' );
define( 'LOGGED_IN_SALT',   'PT:2#H>6b^C?pTPbNF!kM4c~Vl#PZj:<WrF(DRAFD&(H4iEIoW:`~zm-WKF*~[*f' );
define( 'NONCE_SALT',       '0Na9zwWgArY(MlF34}uoIUJ9!I.63F-(_JX~;B]UZewd2PI^,myIa<x>$0(G=<%o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
