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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')bA-b1m3<Vi-Ot%kx)AIxw+Ur,>yN-z}^F42XQQLRu5r_AwA&fG|*t&V3nyN.]bw');
define('SECURE_AUTH_KEY',  'Ng8|8hGG}kDgMJ>b{0>Y)Wnm1|g=n+oCpP[>Do?eO=>%_=@w6K+ds^q%q4DC0+s6');
define('LOGGED_IN_KEY',    'zqzozM|{!=+sv9U4]9RnO||k>C_73[Y6K?Jg:p;=S7^mR.$H>SjAj(;.*M25&b(^');
define('NONCE_KEY',        'Mwg@J^UiK:Sr!X]Y7^}Fg`:WJ<#k;/h]D@e^||xy<E`ZZC#<J>L%l?#?.}-wt|Ax');
define('AUTH_SALT',        'P-.Le@05T?FsVy?KuT+Yjsx|cP~&;FHyq@5(VrRB/!`HOk)+n9_:4MD4DUnVg|oK');
define('SECURE_AUTH_SALT', 'Za*k2,Gj(i*h26M55O_gG/X;&X|B/@+-=V0_r3AtP-P7f}.3}1St7lSo)t-QIl!P');
define('LOGGED_IN_SALT',   'gUgcDXt %T0-#Yltum:6NByF]8vFj#p~S9kQ@8.g-.xv8(s]X;[(e5- )G_VCthn');
define('NONCE_SALT',       '88]EgTX|#>sCZ2Hd//fazKq5<nzd)E3ROfY84%5Rv.4m/]Uw9x m#0szgIKmD$MZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';

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
