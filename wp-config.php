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
define( 'DB_NAME', 'prolokalwordpress_db' );

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
define( 'AUTH_KEY',         '~z-1/-{=sPd? N(cA+RRgR9BfdT#HR<zR?j[oil*[p/GJ_}R2alNN/pU^+A3aGe>' );
define( 'SECURE_AUTH_KEY',  'ho%#8z}tk>B,g hT< Wn5Ng*n,!6(>$IMl.&(iY$dRA*=5GVW(PFnUMB./71,s~J' );
define( 'LOGGED_IN_KEY',    'RoNzB[(]JXguqUDG#?]p@ A!F=,Z0;]|.~#1JHEU#,mxG78I1[dH1]rx^w>*M3UC' );
define( 'NONCE_KEY',        'ea}AP8A/>gmad^) (h.g$.N61A}Jy!BNSB.:K`D)ZApw9}MZA@]qmgNWLJrN^B}V' );
define( 'AUTH_SALT',        '7o}qN!74ozy.B22v:]an#u;kK]@-KyYy=aBo>1Q2xR5e]$K+5T2j,?5N=f]la}ld' );
define( 'SECURE_AUTH_SALT', '_Vb?OEnFddR}uu$E9H:5bUiy8.0(+VIt`!n=>^}M:H|2(FhO3=w;jjpi?atNm>[B' );
define( 'LOGGED_IN_SALT',   'p5c=MtDB:&%-:9>>ly?,3Czwu4naRA!O#i2wx_:h_2]FN(Icvo[,{3<{g=Ry1m=N' );
define( 'NONCE_SALT',       'Jx}}~pE`*g08_l&D1CaI2zMtrQu;GS_MV|tva#0ig#+9= {C2<_U>/I@oE;U$q%v' );

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
