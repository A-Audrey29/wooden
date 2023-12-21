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
define( 'AUTH_KEY',          '1HD9/zkSwc:Db/QgE/TeD_*WOp#%yfQ$qn!=U{|c<xpH8I g-rY#xANLyIRpl:Su' );
define( 'SECURE_AUTH_KEY',   'mbLQ<h}T_.M+8Dx+~kv{eP>BI^;,?[E&a0NlS+zOnx<#1B2,T}|fu}7pIOjT[7q ' );
define( 'LOGGED_IN_KEY',     'vx|$p>RSYx2J8fK-#F|pY#m%1gAb-`k3tV&U7]BM#%^-,=</8hFu.jo~$qED/_@i' );
define( 'NONCE_KEY',         's|cnz3F=?x;qd&*#$8-7FXceN*(.:HKyYJH~D;zp$GS<7-tqoQQ)>)H3~}5#5:|V' );
define( 'AUTH_SALT',         'kD5ttan|^/cISVJCY8D>N)POYczG~L6xEC&ohk>^+$sEnP}luN;b(:Us(kK*pJ%,' );
define( 'SECURE_AUTH_SALT',  'Y 9`IJA]Jkl#JS2px~N?n-F~r7B+R)@-.(:r] GVe5}!T1]^/$!5JQf$k~.GBGcn' );
define( 'LOGGED_IN_SALT',    '69*<ZkCt_Tc%JdF:9MpC>xJ% k~4(~jUrN,{MmXes5y5!HwoN&a]4RMA}[$zbiif' );
define( 'NONCE_SALT',        '.k]#>P9 KUyWx,BNSx]G4soX/fX:m `!)~]Rf}EmMNN9jA78#rt8,E+2fn@CLV#]' );
define( 'WP_CACHE_KEY_SALT', '}Z#=t1ld~y~<0tD$F6z [A<i-Pk!3a<eSw%U0O>AuS*x=<|y^ku:p@NWLFcePmW,' );


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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
