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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "oob4oh_recruitm" );


/** MySQL database username */
define( 'DB_USER', "root" );


/** MySQL database password */
define( 'DB_PASSWORD', "" );


/** MySQL hostname */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         'zR|uZDT2*($n_J)QDSud_p:~R1L;ubK@z}l,Izf[?|e&r!>pomMJ}I=K)IbI3o)6' );

define( 'SECURE_AUTH_KEY',  'jHKJZS@1{.4ZF;JFPI+A3f*+lVthJm`-tI#a3G,yMP,|a.:eJ;qGg^jM_K:}@G[U' );

define( 'LOGGED_IN_KEY',    'IkIET{EZ/vBvL;};@Sk(JTpH4pMDf@52T#4P1HX>2<6Mm:Znuxbzf.BbV4SDUt-?' );

define( 'NONCE_KEY',        'yD%YcF[4-PE*VAE:D_Oad`=#x5GK7W)jOl$ ;E7^f eI<|*9](NP-Tz!cRRXN2s]' );

define( 'AUTH_SALT',        'lf;a~c[f*StrYewcipR<y3>8_8cV?hIbZwB{EP,lLTLkSDsgm{fDvJ~M5^-o!39i' );

define( 'SECURE_AUTH_SALT', ';pkvat&W6hEM;1_%oe*Hc?kE;4YJ&~{pz 1e,M/nGRY+Wj;~)r^GMn82eY,t{H;g' );

define( 'LOGGED_IN_SALT',   '(Q(fk-P_^^9inlb2b&*N)?KE|%F3`|FsdLAED;?`f03L1A`RecV+22QW,b?@tuP:' );

define( 'NONCE_SALT',       'Q*l:hwNnU_sky ^#G>Sif$1Xv5H@~Uh@+j,{ql/Og[]glMkIrRSSD{a?$)Cu3.^|' );


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cs_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
