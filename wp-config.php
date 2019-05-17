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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/data0/www/htdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '960104');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'zh_CN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p;5@F|i@xn(PYA4P@5:%Eo3ZEaW^pzZh5X8_`<+*hyuC3^euhq0!i<GEnXSUio|a');
define('SECURE_AUTH_KEY',  'SE|j0c?]rj&,>VG<ajW;uaypVAh:G>LA!h@}C*5Qs&%%gl@45|K)i4*,(}Wev[;Q');
define('LOGGED_IN_KEY',    'qDp3,+>4YL08WQhT_7 C;K,D>v<f/J5W0u:8!Dc6ndxF1xp: @M}qhYeB6c4c<L<');
define('NONCE_KEY',        '5|!x~`0GF<NUzxC(EC%<q}>j?+U7H2c;:`!OnC+D4e1c51EgUyFmq>AE`C76cp.Y');
define('AUTH_SALT',        'j7#dLu:]Mh%a.MQb8:G<!K,Zygi#c73>0rKaDP:`NSbg92+Z~:-s&RPPRO0+OJ#o');
define('SECURE_AUTH_SALT', '<~;M0/fuaglt*/U;f&.s}2qNP_2,l~`Rgu_ZyIvQZsaH,l)~/OD:iUO;BD^24bfz');
define('LOGGED_IN_SALT',   ';olW7R>VkEq;.rC0x9CzOZpT.Dczt_NX4#}-yWjezt.dU|&y#=R9_sHVz=+`cmF^');
define('NONCE_SALT',       '{IVh2&/b1Hbme]iBAq[5=H:eBLtm6i$[r 9]7Fg]U3f%zZ*Awm6jbdH 7Lh1QB1,');

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

/** FTP ERROR FIX */
if ( !defined('ABSPATH') )

        define('ABSPATH', dirname(__FILE__) . '/');

define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');

define("FS_METHOD", "direct");  

define("FS_CHMOD_DIR", 0777);  

define("FS_CHMOD_FILE", 0777); 
