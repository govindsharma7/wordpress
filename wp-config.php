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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ready4job' );

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
define( 'AUTH_KEY',         '6.+S)HVc|(kHyHG)]2 RKR7K:kY.HC:L*]pZ:l ]7Z.Pl4)>&;520(JNdjX)f1fa' );
define( 'SECURE_AUTH_KEY',  '*Uyz@rL|caF[}[CvcKZ/dJ#]~tNF{0G.@ S1NU{/}Tn5Ktkt_D S%YYTu9&Qol{l' );
define( 'LOGGED_IN_KEY',    'CRQ_#6_xq?,SP[c>$[^yB`4# @#HdjN*2!bIx-f#7|Kxe4AY0WsxGSAZ^tx[`{4=' );
define( 'NONCE_KEY',        ')7alfVfq T1F_r,oh{oy$)`=+_dR 4T5z{#k/wgdF{JRfnV;kJ*&/_&l8HvU;%E.' );
define( 'AUTH_SALT',        'IRdmRB.1<v-qrp,23dxS&H?c`;|[/m;uTpysLrA+1<ml^gP%S{r-23o[5j2b$r|o' );
define( 'SECURE_AUTH_SALT', 'q1WiK(o[G^&<GASOs>3MQ[~>0m_&<%9MrJ5Rn~1eZ-(W{[1TqRSaPleXYp|m>7,j' );
define( 'LOGGED_IN_SALT',   '#f9+D4Sks9)1%-G0YM %K/^.[EW9n=B&s?[Z^nG<coZ|E]k^e##pj4pQxUU7-U%<' );
define( 'NONCE_SALT',       '@*NKHqc~Q`/+,*w6fnlX@mnM# VOMaw{[|U1o?g-)jz92P%+(5V=Ut|y C0Twt6C' );

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
