<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gondola');

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
define('AUTH_KEY',         ':9DB!OF}$$INI~mJzx3Ti8y)x-O{Lu`oxKR(CTbw?L2)#<U%ydzd,Bgjn- <YkPr');
define('SECURE_AUTH_KEY',  '@)%;%&E>vtzyiX4!uky=o9r(2V-1{&s;h--tArTjoI3>|a{4.<xOkr6Obc%+y`3b');
define('LOGGED_IN_KEY',    '^psE3+C[+F^oj(KK>s?JSPfi|URg<sn(lDC!]XrEM<t7nlhy5LZzixO<JV5ND_gr');
define('NONCE_KEY',        '[c`)`%I,--H5dcVNPP&izUB|xsv+>4R[_{izXG+PEhG_8W-?_P>=*+J6by(]~tK5');
define('AUTH_SALT',        '-=-6[dVL^b6kX?-_AZ]l_:S,T[>r/3[V)n|aPETp~UTpri2-WI=3}e|r^ki`0BCH');
define('SECURE_AUTH_SALT', '4y..s|dN#b`B6Li-w-p:GBvjtbJv*M0ql]G}yE-fM&}HYB:1Ji}*Nb:~!e0s3]J6');
define('LOGGED_IN_SALT',   'ov_8JW>ft^CFYAZZGU}2Qwm^WRO1g:XP8a[.@vH!^J?t|A+^%fFGI`b2vS^[F|q?');
define('NONCE_SALT',       'lOWT&^sq{b$i{^CC=Fj67;+N0h9qEgGe2LmPgTDg(2% -p30EgexF`wf`L.wWoE+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
