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
define('DB_NAME', 'rets');

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
define('AUTH_KEY',         'meDmonAHEe*`XMsm_M[}Q-+HRgZKs^Y,Z5Ha(~gP%(ERN1Gn$W cP*IvvSD^*+Ql');
define('SECURE_AUTH_KEY',  '70P.j]nedvkO?,U[79^qjBm{pyDU>J;Z49G8H=#iH/+hcb+3k})2jO<&.Vgns0O@');
define('LOGGED_IN_KEY',    'I#w=FVv:t}IUT&W2Ig9DId-DoeB7gx9]?cjwr}omBB[[SvyvBIp+{42f [Kbc-Y!');
define('NONCE_KEY',        'i/qmpT5@9fr5gUMxX yy:5UpOi^YPRV5pL|0NGH*aV9UhJJ.?2,!gHs4(d=)<kYP');
define('AUTH_SALT',        'ziG{IwH^N>[xVm;/!o-h);x51w&LM&tL]=0Wj,(dDg}TGC$*ixWrY5xeRZmg<4*P');
define('SECURE_AUTH_SALT', 'OU1](aRdc^q6a/q]*/@!8BN.exC6*rxQu#&z#HD$[Wp4H(.IL ,G*2Q?Qnvq|c0P');
define('LOGGED_IN_SALT',   'taCB`67}}/eZW9JQQQ4)UTPWgx&$f[S6R4lqe~1AItk?rnJ90h[O}8k^P+l39lk)');
define('NONCE_SALT',       '4Af eUw)1[-6E7U*vE|2xPL-@_&?}j:@,U~~!pfo1h)hV? { gekd!VT($N}sxom');

define('WP_HOME','http://127.0.0.1/website-rets/');
define('WP_SITEURL','http://127.0.0.1/website-rets/');

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
