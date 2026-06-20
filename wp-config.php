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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'K/:W#*3#4/^9V~%0`B^s5R_zM#sz1e*R3T0B_GvrT&<r fV;F0l,4R_LQ&PUTQiP' );
define( 'SECURE_AUTH_KEY',   '.]lT.yr@7?.Cb`]UkME|fRU1q.~q{DIXI;ELMt%_~Qj9W5UR[53T|VM9]L%c[@,U' );
define( 'LOGGED_IN_KEY',     '6cDrG:a;:{p{Wu![cnzg(5:|mie@h5on~[uRs&1,IHDO*8Op4j;_3@Fz)PldQZ+K' );
define( 'NONCE_KEY',         '*K6DC;xz0~N-9)Zc[1,!g`Lf~PuGN_@0o19 ^4=M[u]#1H]OGb%*P_:F2]^^ _}%' );
define( 'AUTH_SALT',         '$/VmXeCDCbbU<Zh-[MdcGfF9:jedF1[|(<05@f,rFDrE@hnu,Yg}ZK^jfEQts~E*' );
define( 'SECURE_AUTH_SALT',  '|gFr`p5W)oJ.>I<5<&,NUV}VvZcNNFvaZ6fgrQcK1Je33Bsr9HxK+F}~y=/U~N:O' );
define( 'LOGGED_IN_SALT',    '3(i{ZhA`Nv4.c?7W}R (jxMr{|iBu}$P3^%8 j|?p:Pfzp*7eQM,CUU}|Uvsna.o' );
define( 'NONCE_SALT',        '{:(pBywHvrF|4(o;t(DHm(AMD2&Zzg PcwuGu;IRWZU/5W)Yy!VMe;d.^FeK ..t' );
define( 'WP_CACHE_KEY_SALT', 'gF%q=K/(7h.Mvk@GvcS(PExoP$oR[xhu@gM5?>x?:wQQICT_Kqy6/`DT%qco3|+S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
