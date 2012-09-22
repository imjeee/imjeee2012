<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db430926636');

/** MySQL database username */
define('DB_USER', 'dbo430926636');

/** MySQL database password */
define('DB_PASSWORD', 'Th*cHa9p');

/** MySQL hostname */
define('DB_HOST', 'db430926636.db.1and1.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'cHv|mNxck~QN|hp#W6`8YB.YCh$Y!9!fFQ`|%bDU7 9OY[< n-)v;Rt:^|y&Ib-M');
define('SECURE_AUTH_KEY',  'rr>_=:~]>^cQriHc-}-e/0}b-#>aW=YxEHv)v[DToEa#*z~ei1NF^9ou:]]J,8L ');
define('LOGGED_IN_KEY',    'uF0e?i}0Aga_`*80-}qn B^Mb//B1Lml4-wm%~~un+6nt|s$WRJNih>r-H3j[YQ?');
define('NONCE_KEY',        'U XS[`Cxa]9P{iQlLo=8,2M&e|W(5bHAEnq:@V_Hkgh}~YPVgVg`#ab:lZsl>x]R');
define('AUTH_SALT',        'id c6{sM|!$FIvqMm|)gw!lEpy(YoRTpIw+g i|lR-n7~t3<H_<8qC(V(f^(1Wq5');
define('SECURE_AUTH_SALT', 'j7{AIp8!@9+p5Psa7>wM{b-A]+sF9E9qwiOCeZFWJ,VR>{d-$(.6K2JLea&U4>yb');
define('LOGGED_IN_SALT',   '/LDVdy]tN5>=NJk1a`|hUk<*-m/D$)77BXfVk-&D;fM-l,7Ngql4@OZ|N-|CL99?');
define('NONCE_SALT',       '-FEk?=|v#AJnhl)%{;C[scQ=7F6+)<Bful.U0(}N*)Cms{:K(5erYCR|N<u(naVp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
