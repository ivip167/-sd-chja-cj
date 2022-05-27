<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hydrophonics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kklRV^Y?&|V?}%W&`}h/gS4Gc2eXS>sdOQc*7^hD{76|O#S@=fcP+[Wx]kiadskM' );
define( 'SECURE_AUTH_KEY',  '/|_?E|z(XbfnYy5Q);<S<Nc/1ER+zKnwmsA Yl[y 9P@dE4(O-dKq$YxAI`MMnRH' );
define( 'LOGGED_IN_KEY',    '<Lz6,|18xR6%N.6m!AGmLfuYvhgm_N$i%}R!)a smtnX5^-^d=/hcjqa,4&2]enb' );
define( 'NONCE_KEY',        '__Ef{98[+tyhRA*v;l:tOJ2y-#S&IQd[/}m!}<x))]~TaS]dM:6/xN~3d`v=2??c' );
define( 'AUTH_SALT',        'B`6~dnpd]hd)N{ 8i;M5Y`}-Rgix>pv:uQz~O?ci vIB}%>J~xw<xY]&}]z*!<hB' );
define( 'SECURE_AUTH_SALT', '-fR=k3AuO L|rwjc|7fZ2d)b:<42s>H;[~V_=W2=HCmGd.}f8ruS^j_co}g2R1.y' );
define( 'LOGGED_IN_SALT',   'R#b7xvoD{7}jPIv#49,T.18#n&9}^CQxR4M6#%z;.rqj1F4-v1?DK9f{kzhoT9bH' );
define( 'NONCE_SALT',       '$.(lBLZwqlyZ%+C+@P@@;-;n37KLbiOH*bUy@ceY8n1<&Q#*}D^SSF,;H_?Z ES2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
