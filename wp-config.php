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
define( 'DB_NAME', 'wordpress-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'K(5ew&;Mz1~NSAsizjwB$%3a/5o>CG?gDCh2uHURtZmVk>]4D;#lS&)hi+ORxl6p' );
define( 'SECURE_AUTH_KEY',   'e!,T9PDL>f[)CBn$Q<tkj_7Fv#GcGn9HmNGM&-E]*PxiK&G@SueW7=fOXBi`._MA' );
define( 'LOGGED_IN_KEY',     'gTH4hDHir0.{l]O&0vIyA}@x=A~3Odetgs^,Ea?Z=&v.#U:X2?s9({24]M}t9nh*' );
define( 'NONCE_KEY',         ',c3iI`#WGc;sF`A)RVp8>FewK6E8W!co12%yNu<?W$B#__Y!S=8UppBT;=g`3j0a' );
define( 'AUTH_SALT',         '?C1kyn4}X8j<wJ$f=rre.J0vBO]nGCy_],4,(O8T&wmaoSE4s[aB_9[2yBQD~kbQ' );
define( 'SECURE_AUTH_SALT',  '-&{EGCL PoyXLwAU/Rg$sC|m0SKyodYq1s-~Grl{aY:Ee/?&r9?L/xjH/5 d#AUc' );
define( 'LOGGED_IN_SALT',    '9^8li4`,t0v<)_9c[/+)Rx[FmDEa?^lS,Z[$GU3V.<a?-kKqce1w)>)q?PQfU.>R' );
define( 'NONCE_SALT',        '!|b!:Pc5Gs?6;e)S|r5*fCT5n.PnV*Y<ByjlVLY!7d0Ov>4[s$QPR)qv1 !e3sr0' );
define( 'WP_CACHE_KEY_SALT', 'LurU}qsSp5KM`d}yH#,!)/-j)[PefoqxNm_Xt,ldhb7I#KvGy=#K)T%Mb!u t20#' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
