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
define('DB_NAME', 'markest');

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
define('AUTH_KEY',         '[o8mRGDOS6q|FqhEbXJ{bfr(+Bc+Tq7t@|X{@Jf&`7pnTPb#TtQRjQ,UgHCt<P2}');
define('SECURE_AUTH_KEY',  'wZ7<n-^EZv)*6j(V2g`g$i*?Z/OQ0[ZFSMljLMT7Zs#Im~3:Pv-`*rsTQkSB4poo');
define('LOGGED_IN_KEY',    'c<nu-Ev<s[7H=ONxA-xM)-$o!xt#KH8)N9{DSXB:_MRj/,}%7T++.sK|>Cic@M%#');
define('NONCE_KEY',        'o547- QED#t.l*^G$c<C+8v}(2!&1OC4{}D2GA?H|j7|rwr-vaS4|z+{m$|,/2Sd');
define('AUTH_SALT',        '@cE$|xE](=fC-i]p`8K%qM=fgI}i]~_GO6}8X#U|71UkY{ 6j-ZR2o:$T-Gt-O;A');
define('SECURE_AUTH_SALT', '8@a>Fkx!b](kN_nylLL,3tz]HVM2~2tJ;F!z|hiHshy_IQ*C.IcviD-Q_=+h_LOY');
define('LOGGED_IN_SALT',   '+Ppq wa}S]TC@Vy}byE.py.;<|xe>+Qb:8Eqg>T+::-w=/W[lJ/c?UcZMYWO7h{B');
define('NONCE_SALT',       '32a,}Z,MUBwq;rgH|3)-7)<Al|++eAgLYX2M|SXK>_eHNNB@~/OszH_Nf&mCq/Wz');

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
