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
define('DB_NAME', 'gilson');

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
define('AUTH_KEY',         ' `ILLcVNJD4UcF+9|y0-b%:mcybq@tVz*-r^$t}Zcyw08&>K#Q7B/dpOLIb_UzFI');
define('SECURE_AUTH_KEY',  'zYF7zxu gyk#Zp{miXroS=XL_$sX,TT~bX-`,!Rp4#W)oZ,N<K_*+tQCW7,y_Hyt');
define('LOGGED_IN_KEY',    '>$vm$EfU<Tn7gAkx5NE:+)+~S4E+`SFb{lzbHSm*cG1> 1gtq25c|7!5swDI94l~');
define('NONCE_KEY',        '}&hL[|A7M6@b!N!c+]>_amw:&1=Lri}C 7b-,@yi:xaA^l=31_$i9p9N81Fq-dKB');
define('AUTH_SALT',        '?P-3uir11.Ux.-Z,<KrCub7I(D&+8m8Y3FR.Zy<tZABAfj!2<1BpMt/Zb9G2M@rJ');
define('SECURE_AUTH_SALT', '9G}VaLw.Pd A)QGGzlq}Cwsvj.W6$?W2W87*im[PE@h?%O6yUJ=Pc}j~wH>?67Cy');
define('LOGGED_IN_SALT',   'CD,>eRPz_I7Bnmh>rb}6pgiGmqH)PP5x/N@zYE3q;*K8]&wxmru^ZK F73Iw#12A');
define('NONCE_SALT',       ']2y.iwMUQRHvr*.[ObQdrE`9B.f6JF@j)Xbs&ZuQr_#YKo]7SI|!L@kZNv]Fd(j|');

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
