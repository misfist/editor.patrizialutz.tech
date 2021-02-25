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
define( 'DB_NAME', 'misfist1_patrizialutz-editor' );

/** MySQL database username */
define( 'DB_USER', 'misfist1_pledit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vH85v%^6H*Zxkoq42to' );

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
define( 'AUTH_KEY',          'inYbCePkGCh8$If:mcS*,6`a[~X^,o|4!$e*xn)-Cz/fJ-e=*-hymbJeQ*SsMrIT' );
define( 'SECURE_AUTH_KEY',   '.OM49t+Pkm|r,t3VC&uz2($}mIn/MAu:gyqN%ggAU]T0TK^[G4Pxj;$edy_amq#w' );
define( 'LOGGED_IN_KEY',     'U!c4`M/Qf _%/Z<kWn^(r5*Ze _>E{ff|`wh;:MS[lNwX.L*#Qp*L=X/yt_**1TA' );
define( 'NONCE_KEY',         'b#&cd|Phy&FzBPO2OJNUOeA$}xq(r!q1Q^V3XjMZ<XO0`-Fop6%4)Or0;[(Ox@@@' );
define( 'AUTH_SALT',         't}|xsH,kN7)<QI?9>7Q,%J!eH3R8#QzBs!NH_]e5N+Unp5g_ blm__)|e:}-.6g<' );
define( 'SECURE_AUTH_SALT',  '<+YfMcCw`$CH$dlP`B2WN5BZ s3(3x!%>Jv@E9Px1g,E`].sPW)yawjBD1)Se>,a' );
define( 'LOGGED_IN_SALT',    '0[GVU}u*8xkKC(mD|k!4LqOKknEK.v6i|2XKN(a<7IkHzJpZ@Gp]YYXX~O8ynC5t' );
define( 'NONCE_SALT',        'LDoWC~s~-PHB^2tj)r#ga3yz_Z(BNEOxGP)QjDuTv?`7:Q&o t7F*(HEE/SC<(9X' );
define( 'WP_CACHE_KEY_SALT', ')6H3|AnVVRPUC=!H@#WTZd79wBGMH=y8KtlaBTs[ov?z?IPf6is}cM`luQ5 ,v`6' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* Debugging. */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
