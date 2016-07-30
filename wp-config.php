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
define('DB_NAME', 'themenepal_self');

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
define('AUTH_KEY',         '=aW_4e23R(6S<rao5c%G.$ 4hrC%w6#m{B<(|>u:]%]T,Tx:%]r+ J?$wU4q%}uG');
define('SECURE_AUTH_KEY',  '4vFDSX+kM QE-:cDGw_4T}r=15B=<b@/1g)cVBJ0}]l;htE >&_&`jCESS03{:/i');
define('LOGGED_IN_KEY',    'GY&-T~qR&fU5[BZ,lXB0.U)t7wsn*=H*p=judFX=BkFj):iXQmf`su<$N_7!9}?r');
define('NONCE_KEY',        '3[Y$7ZKqjL{ [A9.fdpn2!b! aP(ix$zq7aGDNL&,4]3+e>$uDUDP2^o+HUeT5m*');
define('AUTH_SALT',        '^xs)<koG4Rq0W9r|pz/5do7R,`7d0o JPFd|qO&T!$P%?vq:u[^(qrK|PqeOM,@<');
define('SECURE_AUTH_SALT', 'Ip@#c2Z4h8;wa+bgbh )PjMb3VQ~e|=Zqx:T:u j/TkSB| bL#~c4D-cD$i<|>of');
define('LOGGED_IN_SALT',   'sW=8O>S>4k_PDTzgh#NETjF5$b&bgVJBX>]N+=lp 8fnXEquxhZi:$KMzhID79gn');
define('NONCE_SALT',       'iC5P2H>GW}%0Fv#Q%Y&]w7eIvn=whZB2FM4_N9Fmz(=M,Lh=}_W)YcIVe_s_E0*(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tn_';

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
