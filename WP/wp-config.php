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
define( 'DB_NAME', 'aqgoes' );

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
define( 'AUTH_KEY',         'y(WJnK|GdutaL~cL3HkI&rs4NA{7x@IX:=|tUy B]kx&+p0!BzL$2PrL1TB]$ZP$' );
define( 'SECURE_AUTH_KEY',  '/GaTgocQD]]U,{R,4PQ?)#13QAsS)f>EYMEtKDabp{2Q0j$9#)>RqTlKS%TRsZ(A' );
define( 'LOGGED_IN_KEY',    'S8SS. 3^yW`n){Np=,>CMp7?De:W*`U`uqGwcm]iJC_EK59}`ZK;+K4MHC+[XzhI' );
define( 'NONCE_KEY',        'G5BRQKl~lUJ> hSyuW,0EZ_<3#DMKK.5+CYXteY0,>XcryE]~vzr3%W&?r(Lxr(e' );
define( 'AUTH_SALT',        '7^o{&p0rpf.GactB@9]!pn--0mO1#4|<X$G?GF3_=Yy,3X}fbZAq:n>PoX{yvpSJ' );
define( 'SECURE_AUTH_SALT', '9O*`>&4HM34=^pnq=.ZW%c]x_KBGfOEVcjgj{($AY3?VSf|b#IIJ4SxPDh:4eZyD' );
define( 'LOGGED_IN_SALT',   '#9_(kLiyqB2i#4AU;rT(U,k~YlvleIsbv`xV$fq#0G39[Ice|wsvW1/vPL~,fYP9' );
define( 'NONCE_SALT',       '9R}JIPg{X]IYLnsqe+9K_ &M(]!_6#3Ld^a5v; Xug2/J6a>L|2kUJraJM;#,_EF' );

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

/*Erro frp*/
define('FS_METHOD','direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


