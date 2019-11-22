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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fff0126e902e3b931c8ee8777e5d487815205006ff1f72df' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '_D )lK&!}Qk&@[/1eoa#f^?++kaH{r*AMM83IAH6SF8d+lqW]j~^kB)MN?|!|)Fe' );
define( 'SECURE_AUTH_KEY',  'gHc7.t1-EdrM)M23.luR{ClDOKu?xv&fmH8cCRX^x+Jo,cf>XbN9 *u<Mxcb5A<@' );
define( 'LOGGED_IN_KEY',    'd0L7F0#HC;xQS&NmJ%fCn]KrkwAh8E@W<A>tmTbKo1@_P},l>|]q p&zmm*z<wPb' );
define( 'NONCE_KEY',        ',uykA@G6k;{(bd&XEn/0#>X0Ao K1<>N]DEdm0F*2FxLW#_};+?Rmj^W*/c/0K&h' );
define( 'AUTH_SALT',        'W8a)bx7JW?rHCH4w?`_bWK1c`47nW;G4Vj9Xz4KT;Gv3e*}B~u!>[h3`W,_)qc3(' );
define( 'SECURE_AUTH_SALT', '#!|likT!/d^,*1(@5lv%%EVDHRW}Z}Yr<kbQBT?dN)vUQb9$!wpmA}{:ytcRM=W~' );
define( 'LOGGED_IN_SALT',   's7IcnEB/^p),G:-LH>Vo%*cu+^(%^LU#jAt&2ZFYnv79O!hpPVE<%AMLh`sUi~eo' );
define( 'NONCE_SALT',       '9T=L#@m&-dHA}~5~h~{dd4DI0myEW>4H_^9XX8wLQdx#N1Bl?8(cd#B@pc0Ubo7|' );

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
