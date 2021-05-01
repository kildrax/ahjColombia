<?php
// define('WP_CACHE', true);
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

// define('WP_HOME', 'https://www.ahjcolombia.com');
// define('WP_SITEURL', 'https://www.ahjcolombia.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ahjwp');

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
define('AUTH_KEY',         'ogc0^iKs;a8>dj)>.!tipuOh`h}MEh=nVKgO1NlaC)u`7[n+oY)0@z+~ZH@/8hp[');
define('SECURE_AUTH_KEY',  'Er.PKWADt9(qev7{b^>AQQjQ1BCAh5~5+x%os}JOW?@q#-9JZOZsVcjdA.6/M^2O');
define('LOGGED_IN_KEY',    'LrF?u_?f1v4OQzMVo5,phoqnQN9?4,Z1A}6H.J 00C+.}yM&cR6k{&[&_U*V1XHH');
define('NONCE_KEY',        '6P>O2_yDk_]odG-1HRV>a*vu0(tHLN6.q&ZDVi^4r|CRFu3nAAl4^0_gh0t||!vj');
define('AUTH_SALT',        'k>7LEY_[K$2]{rFO_*k9) p.vW{`7F#T!uiD{S%Lq8z*ABFrKiuLJRz8paHL0Tq%');
define('SECURE_AUTH_SALT', 'Mf6`h4b[P~@D><M*}+H{,4z4y_X^Pd1SzGJ>)e[W  wG-EM:?Kj9R@Ccg|&6Yci`');
define('LOGGED_IN_SALT',   'z]AEjaXu.Fi]aqD.Q<l9%);oXe5s#W0k z{RC}FdEOMS3v[~<}2;QKc1P/{(#!$#');
define('NONCE_SALT',       'HkSS!3Vi8ASDbR)9cfONQy7pwX]?|7NHDZKtW/bAO%E{qyf-{1P0=>yfw_t#Dv>i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ahj_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
