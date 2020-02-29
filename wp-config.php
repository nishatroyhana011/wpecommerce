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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cse' );

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
define( 'AUTH_KEY',         '`~MG[q{>$/Z|$p9HW)ACnO^0Q%d{^!;I*=!jv!e<-O(/2JtV<T%Z%A]iGey83,_F' );
define( 'SECURE_AUTH_KEY',  '~F:VS},*#L (bApxv/sloD{iB%)c4e(*Vgikfr{AH>P>FEp+RLgPKO1E<k:#} X`' );
define( 'LOGGED_IN_KEY',    'Nw9WMe5G[8mDZni)a:9OSZV2X)AM2)L!99Jm=^(GsVXS`!mH,N&%,U^mq|{+C|!w' );
define( 'NONCE_KEY',        '.@Q06J41NmD`MJEM_E4!z2YP=?l?V^,30|WhR>M7U*IJ:IjceZV 2%^)luRf#mt1' );
define( 'AUTH_SALT',        'qTzo{]kafa~sT=-OPYx_1LVEnh0&?Hw:hK,jjL`ydoE*~1wtbP]6i(?q[I!bY=wh' );
define( 'SECURE_AUTH_SALT', 'QXvpL6$]y6&31-lg5LF$UR1QTtD0&Qg>U8yg(;#GACxvvtW{#^@ON,3j&g*%MPH=' );
define( 'LOGGED_IN_SALT',   '!k6(G2{1{N/u.dZIhphw>+==fLJte!?!HOM%qHP5J0RHOBqzL$0L4i/Q+)+KK9YA' );
define( 'NONCE_SALT',       '{N?O{M|ylWIbjek1|ZECJi<1`)F=WP1>fZ).5JL,iA[D;v&]U>~<@x z2Ck|=Gd@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
