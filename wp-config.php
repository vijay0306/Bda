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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GfH)jo;vrTwZod|5w@in5{$-n~aiH87I: PLZqt-C-cHf12@H6NEJE]Sg;/?YUN4' );
define( 'SECURE_AUTH_KEY',  '&0tK|Ev3E6_MYk(0;du2>|7nX0:rX :ILHp( j|Heu+dzfll}yoI&*nELg<oo^Y3' );
define( 'LOGGED_IN_KEY',    'hRF7JGs;ODI,;SzG/WrlE%q~(0j+q82o?zZpx/(s{uvEil>d7YudlHQ.%T9tf0*;' );
define( 'NONCE_KEY',        '0Vb;ohk$H01zf#=X )$(YNS>AC*^6Blt/uYfGIXT;i9avyHS4-ZEp28a*bKL?#zK' );
define( 'AUTH_SALT',        'MH<YZCuyzF*MBRS-)ENiUy0t(DAEfbrl@_X{7:Tc.]hzhu7;J]D2Li1(n20w|7Tu' );
define( 'SECURE_AUTH_SALT', 'IUe&E%-:2:0M+?{[<QT/MYIeEyu=_q>z[ixS(nc2Jw4&P_K]QJ];H<_^ 3;gi(Nc' );
define( 'LOGGED_IN_SALT',   '8|k2%sdDng5;3Ojqg9S$21.wwZw$>8lqHe?QH H=hVC8^Cc9iE5qYh337x4)U+10' );
define( 'NONCE_SALT',       'mX|@p@>^UcV?u~;s1|]L@CIv}-gvuP9I18ovU$4ZfmOOgHK#hyN.dU<k>DL9.vP=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
