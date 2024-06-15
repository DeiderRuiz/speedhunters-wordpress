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
define( 'DB_NAME', 'speedhunterswp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Killjoy-0908' );

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
define( 'AUTH_KEY',         '.>&<OjAAiC#eI`NMa=1p/Iu2zRh eBc[gGGn?/xG7n0;T*q-h;01HzRAjow=}sz+' );
define( 'SECURE_AUTH_KEY',  '!t~h1To[m(?4+_)SuxDJQ#dWc7?]2`*7yy!E)/cGE8Xrf~#iQ-K4%1rIv_j*}DL2' );
define( 'LOGGED_IN_KEY',    ',4|MYu+{`HlH[VZ>n^B(mtE}W8ZX+:jJMiE0O9^)t[VOC9;HC53_ti<IsS#[yyM@' );
define( 'NONCE_KEY',        '%y_?HwhW,MKyp>v<2c645{g*31Yg)Aijn +d|xeIh_UYt,=SHl/*DakJz{OHpL)j' );
define( 'AUTH_SALT',        '~+xijXET~!ccLlAg&J0Cv>m5J:u.+ _cywFwXs uwv`q?j:+n,:>:`/IqSb>qQRv' );
define( 'SECURE_AUTH_SALT', ')Eq9MI7u}OGAt2z#xf9YW 5J8<WN]?U5=fM&e0+s]WkVvAktDRlP] iUXDF?t6gN' );
define( 'LOGGED_IN_SALT',   '.)ukyex9O3WHpK5.P!YikLbVjo4N{= x<{%[28hFynSbw]= f!.Sc0R*SDBn%>IL' );
define( 'NONCE_SALT',       'cu~lv&F}HQ|:}<|s;8T2auMud0(rH5Ri;P|`0,s<|_Uwga)dd O#PMz$CZjQ+}Mt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
