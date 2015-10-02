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
define('DB_NAME', 'makerswp');

/** MySQL database username */
define('DB_USER', 'makerswp');

/** MySQL database password */
define('DB_PASSWORD', 'makerswp');

/** MySQL hostname */
define('DB_HOST', 'lab.makers.do');

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
define('AUTH_KEY',         's||wL?w|fxu#L,vN7m{cX&RO+0B+1Eh%7+gMYN[2z-j4 $v8sJBAsp`?-Y*DGn2U');
define('SECURE_AUTH_KEY',  'B%LXGV-V+(3EWw=&v0ox^RV?bk|Z>CC|7}dgG-}5^m^Ug*]P4wUzU**z87^f%+}|');
define('LOGGED_IN_KEY',    'v4|IJ;^|LJs7Qs(x{65c5TPA-xR)/:Fh.tGr-< `qR];GWQH.%09vc%K`H.!+^)8');
define('NONCE_KEY',        '?fGVl=dfi(-8#_P:&S0hIzqxGFenl6tlqGp-)frpr/!fi!>|@W2_L,!ljOuiy(|+');
define('AUTH_SALT',        '|^ IKsr[aUO5D:|2b;+6Y<#wL:Cx;`LOrH1lO%s`vh|ALA-{D@0,]))8*eMZ2P-+');
define('SECURE_AUTH_SALT', 'y-OXX2yfwLvZ}8MB33A+6[tv9N|-{B1;[#$r2<&+<u0d83dT)mSs4FV43;rB;gd8');
define('LOGGED_IN_SALT',   '}M}6O-sJXcB $4+`QMgAazj+05F1*hc!5%)K+nU<xV,~AxP&bjwc,}3=2qqaP)m:');
define('NONCE_SALT',       'AG*%k|b#:eJi[dtDU]w3A1sZc9x_9HxbKs39Z]L|r>jP VxeIj`QG2?ohy*UhnU&');

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
