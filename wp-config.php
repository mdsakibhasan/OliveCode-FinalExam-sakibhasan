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
define('DB_NAME', 'OliveCode-FinalExam-sakibhasan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z|`Ng=Bi/f7>|(7.0*+YjEtPmeH+oI~;__Euu|E$tlW+;a+ *)x@/W^#%LA5@5gq');
define('SECURE_AUTH_KEY',  'bic wH`D[cQn-L,+6{UTn|jE41|zM2;vs^$z#Ll#Ma#(5ztC:xk},^/<`qztys$K');
define('LOGGED_IN_KEY',    'HV}nK:+$[vTqE!NW3(|~`]l4J|2e)pF Uh{v<-PnAXE=`nN<.I1 rych$zv&PNMS');
define('NONCE_KEY',        ']&(#o|Uj[gac+zX1era&2M#p0O:U~q$o,:9^l#r0nZI|`RS4Bz}CJ2ja],^zQ3L]');
define('AUTH_SALT',        '5kHp1jH.^FM@kLTt1#2-.0z85o-SIMS/hy;Ema+|m([_,l]WbzM5-Ys(kz d,9+,');
define('SECURE_AUTH_SALT', 'Hb5q?V`oX1J27<t`kN6s; 19TT`vYf8f s9r,7RcNRMc^ns<b<wzsNeWAp?E0G*]');
define('LOGGED_IN_SALT',   '`ib8!i;UC+Loo1^H2.G+{@a*>4<!p)n6hYhR/ME)uzLlkA5#l1a~oPV(V4y@VK3*');
define('NONCE_SALT',       'Q)4*,+aH 7-wgje9/m&YAlGf~GI6i{L23GT$bNzCO$KN--HLh}u^1%<FD/aMepIR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
