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
define('DB_NAME', 'db643863050');

/** MySQL database username */
define('DB_USER', 'dbo643863050');

/** MySQL database password */
define('DB_PASSWORD', 'a1b2c3d4');

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
define('AUTH_KEY',         'SrB:Gl#R?4I]EBL[hDJ-BN-P%i]/EY7Hp]cbk[:+J`TDHpL}fh3iEt.F~A7EEo/}');
define('SECURE_AUTH_KEY',  'JTnYdSI,5P!?yN!Ol<v(ul:C,K4>insO=+pVgq?Caz1?.~mhj/]I:X15O|]VDEV]');
define('LOGGED_IN_KEY',    '1q41>`2~0nA_c]c);R1CW;G`Je kcY%]XMKzmX}0edE0)jW(;~OR_<+h=*{:2Oho');
define('NONCE_KEY',        '0ZsK,(t; qCaqEO78nvmK9=oUQ^{/{iNB>8euH1AKsBEcxGGc31II,5LW%c]KWud');
define('AUTH_SALT',        'KE[-Q_zEWNeq!@l;.f~-]D_FxJq64!,-I52Ps@i@a1+aa=6b+Sf>4B32qISST`N`');
define('SECURE_AUTH_SALT', 'g[KXUX?~ONkxPhkuc_ePj:TK)/(MWg`KxDqce@N[2r]%HS>y|0y=#(Gvj4AVjUUi');
define('LOGGED_IN_SALT',   'G%I74n6,KscI|<AsOU^:VgSn{T`[3md ePJ<d-aUa1eng]<*nzzxZkaZDw;S+:Rk');
define('NONCE_SALT',       'rKvNXdYsl]Y&lV<%Q>.kV{&F4@5~J0sv&I!zg%,8,a&VR9vH$ckP HfZ^4!hfg`U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
