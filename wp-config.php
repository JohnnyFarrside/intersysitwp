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

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD', $connectstr_dbpassword);

/** MySQL hostname : this contains the port number in this format host:port . Port is not 3306 when using this feature*/
define('DB_HOST', $connectstr_dbhost);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*K4cw-[!yOthfe6&du8Nc,3Q|1v3kDjqTS B/& 9CoZ<{BJ8Y[n/m1s2pg3h>go&');
define('SECURE_AUTH_KEY',  'gpY/Wm 6t(7>[Rp7U]4}~_AA`(7TuJq0~U_ubC7WM,9_1<Es&)6e=.KCe}{m+=-<');
define('LOGGED_IN_KEY',    'j/01HgUz*-O,j7zcBf5Q`L9<eIYN?`b%Ph!G%&|yKWi,,lrfUT_0T@H6]h4RS/F*');
define('NONCE_KEY',        '~7@[+QmVVRPyN@PHvs%OZ0yhiv=Ua5&>p=52d#e!V V4Ah[(l)`=wz9+NoA4^?8v');
define('AUTH_SALT',        'h2,#W33)>rcH<{)TO95N-IO]#H/aU%yvPI[N>fg>M5rMaEE8YH!Fj[kg`]D2w}[3');
define('SECURE_AUTH_SALT', ']3sEpI-:g#rsG?8Xq?)83HO0j(vM&$IZp3:KT6GMtW!&*Ilp$LCrH &-oIeuDvQ6');
define('LOGGED_IN_SALT',   'wvH[I)9MmA:D]n5SUu~ANkFDgGgi-_|I/PJNaS2HOd*>yb$@aRNm+/0<X>UX%v^}');
define('NONCE_SALT',       'R:Sm$FD[kkn)+1q,H(LGkFLvSy1[JzA&J@gWq[bPaoqt:DOXEcE=O00]FGWsZT[k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'intersysit_';

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
define('WP_ALLOW_REPAIR', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
