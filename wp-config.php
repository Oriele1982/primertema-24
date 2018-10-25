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
define('DB_NAME', 'actividad24_primertema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',8.eRzp/:9V.{pGv.hBH=dQH-8Pt>;0|H_8^_H.wJ0$1Jj3v?@Io#0b9/wE`)/L&');
define('SECURE_AUTH_KEY',  'lBYye%6n6^e#`9;_rIDHcEZf_`uB 9vNNmo]/f;na4[LFIw(`Ww%#5@00ZV2AQ`/');
define('LOGGED_IN_KEY',    'ppT2s <Yy-LCyZ*EsWrw#df+7d/B)6HSv-bXXSn/<;J#m:50:n6aJQjeSt>%O)Jr');
define('NONCE_KEY',        'Vz(a;.g`&[8s4up4 e,J=gMbQM;u.qbD{g`P2BLG13l[e*o#-^Q!sFN[.f?;9 .-');
define('AUTH_SALT',        'Wi9!<dSe50RK>{_cDe^NTFZ iw fu^K>OY5R~WH}-SOv[n-P0e65Xz6y!zD){<z ');
define('SECURE_AUTH_SALT', 'FP< |b){C-pE(J-w.+-lgpGp=LIfo(U|/F-,KbZbzi=]V}~~Px2F4fI,4`F~[M*u');
define('LOGGED_IN_SALT',   't~b9jSu6!!U`0;4d[i/SB-n$3{s1jGD0b?1LQ5.&-63]5OhD#<%tMzUI[>7skPGc');
define('NONCE_SALT',       'thdZm=&H-xsdgEFo53!Zs<.YRw>S@TcVq6Z*mYpw%mA?:SGI94cDL)ZKmUAP3)bN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
