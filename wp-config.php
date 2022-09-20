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

define( 'WP_CACHE', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mdtdirect_com');

/** MySQL database username */
define('DB_USER', 'mdtdirectcom1');

/** MySQL database password */
define('DB_PASSWORD', 'Cik8dGQg');

/** MySQL hostname */
define('DB_HOST', 'mysql.mdtmarketing.com');

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
define('AUTH_KEY',         'EP)9Niwh5Q;yV?j4rNj2/vHTg%g&Kq3U9E"3EkYZVb&zSNm$7`r;5irTD!AfRG2A');
define('SECURE_AUTH_KEY',  '@&rj`CMWc!A_9YePmz+hu88sf|t*NDes|tf5u^O3gj?sGQ/Esb0Yh%Ac6^nRc&4s');
define('LOGGED_IN_KEY',    '?v18/7U"4EvJ*M(sy)*GUMJUF|Ea?"FwmDZp5cvRhrp5/12#`t"/~5;6;14PDK7Z');
define('NONCE_KEY',        'mWs^2L`BA@u$Pb7$9eBUZJY6H6VAGDx8XPCL5!k9&K@QNB:OKC?8_Pxn`Hk#E~nn');
define('AUTH_SALT',        'h8:!vC("Xrrfu01oNjUc:K"Mo#ZY&JRGW)3wU1n2tscN7KKS&|EU:7FJvCXBgGrl');
define('SECURE_AUTH_SALT', 'BxYVxQ&_ywq6IJkXS(;`VigC8L`gy)Nsuzp$)buDgVHLSDw1zokOSIIG#/Y"b8^1');
define('LOGGED_IN_SALT',   '4@#!TCj5Nu$GGt#YprM7uzF;9Rb)1$d#Us7_M_f6lT23m~x4R(~5&pH`@gc1`0lE');
define('NONCE_SALT',       'rxn4|)X59nzzA"p!GgzesM+Be&!$W_NZdMnvTMvP+jX1n2&y_MSyVvL8W~3J5v^3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_DEFAULT_THEME', '/wp-content/themes/hello-elementor');