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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flowir' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E;muur(E8QYU{uSR<f: GsAWBFo9k10L^Fu7g2n R2-`^?i9@ :^fb<qKJ@x8CG3' );
define( 'SECURE_AUTH_KEY',  'T4](.2f@6tsr(CzNd*FLuCF*XR0Yu@pHPguBW[n` bqSO[-|Z!s2yQYRerB 6nk7' );
define( 'LOGGED_IN_KEY',    ' bc6Zu;<mSd$5c{cD)njGzM}M.RtL{?4F(NNv|qDfk/:;S^aEH{70^l?PW!DlG=B' );
define( 'NONCE_KEY',        'F#dx_2wLW:$[wheJl$4*nJE&h!Vth3~SV@0g.vo_$Ltv2:JRzq8[V9o`0kk&Ck{4' );
define( 'AUTH_SALT',        'uk^CW^f+UVMs]D^<5_U`78m)2o%MeZ2wQ_LY^8eTz[<gV}(C+{bp)uTH%8q& dLD' );
define( 'SECURE_AUTH_SALT', 'K^Epp3,w|0JJR; zJ1n9d~i;zQuN_)s;cj.P?{:)I~EYAzFwt&fkR}ceJaMnD>(u' );
define( 'LOGGED_IN_SALT',   'LTu=QtNC8!E=[n:eg&X5vYj,65,L[>NDo>b[g7zG#D/`l/eaLvo$,jwq_TgfV*Ea' );
define( 'NONCE_SALT',       '*CL]0KbpT9V{{jNOL]/g;~;_e0eecQIZjw4Gm:43ny1/6!x[hp(rO%.!(.S80q5-' );

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
