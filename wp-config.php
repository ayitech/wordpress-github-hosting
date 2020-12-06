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
define( 'DB_NAME', 'dbwordpressgithubhosting' );

/** MySQL database username */
define( 'DB_USER', 'mysqlmanager' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DBmanager56@' );

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
define( 'AUTH_KEY',         't [S }-ZF{?Rh{/VX}JWz =.`9kP/2byPAF y ]]+$`=&knZf4o8 -cS8x( I{(F' );
define( 'SECURE_AUTH_KEY',  '3[+=-ZR3IhZg-t+6`-|-1U M S) k8`%!5+^^kVrB55cw5lf^c.Mj$KhZKrn6ePb' );
define( 'LOGGED_IN_KEY',    'du@ kqity+MgH;J}6dY}Q}z@(]7V3ZL6h_DfL,GP97BV37GqqQckfn-:)cAkXX6W' );
define( 'NONCE_KEY',        'r1$0G{]F!K[n)P-Ii$r@XnApWb}r-TsYtJP3xTZK~1@M4;i(Rz,G `O)u8r$Dv^!' );
define( 'AUTH_SALT',        'NhqJUp=lN!x{jGz{AHHj5GPx)h84!B2Ib<F3z4l#bY~( 9Rq4bGYYwk@pi ]G`Uh' );
define( 'SECURE_AUTH_SALT', 'bm!d)6hN/{gS*87(=DQ}x+a?_>.d1mtYC{J52KF%;W`PeV3:j 4Zbw*aJAMSFYay' );
define( 'LOGGED_IN_SALT',   'N yt=8[8-GQq?aE+&C{:=_|Q,e8c5z#v_w00& }}ko3QBtcX8lm)yY6$>wk+{Cs(' );
define( 'NONCE_SALT',       'c~lWz#efj&{pn&Q>UI`#s}OamSL#kb{?X ({WoIdBBrgC%TTjY<ti+  ~Y:T,T[?' );

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
