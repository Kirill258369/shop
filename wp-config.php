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
define( 'DB_NAME', 'admin_hostlast' );

/** MySQL database username */
define( 'DB_USER', 'admin_hostlast' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hKNxzieOvh' );

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
define( 'AUTH_KEY',         '_L_%JD.B.c_w4LKThU,vDJ{3_axdAo(KJ}<n(C.zf*#2>lgE;8/ih8kUd*1uAv~D' );
define( 'SECURE_AUTH_KEY',  'YapaZIU/O4}v@2A5T&`$>5A=%M?)l-6~eV-`F*m=7u{I2?/5i;g aZRLwUW-F=b|' );
define( 'LOGGED_IN_KEY',    '}qoH-8h_KJ:[x{yj|W*;$9yq2|a.c}GJf<Pq!$_G2?duB>W%)6bELq)+v`((os@x' );
define( 'NONCE_KEY',        'Yv5:g)60,;# *?m6vm`6&7A~>w[?]i*6~s4oJn3b2kt{-4S4N(8&ExNEeph2_jn=' );
define( 'AUTH_SALT',        'K[|2b)EZP/$%aLOkL,#Zx+RI|FTj5_|o^alME_U86D9Y`Kc|Y6}L?@yYYs|Q90zY' );
define( 'SECURE_AUTH_SALT', 'p.a|#~Lenq>.8_.1$[T99fL#.~ia1yL$b}bGv`MglK{?H!V-:e{64ELL?B`av~3i' );
define( 'LOGGED_IN_SALT',   ']F(]~}{esxU%{<aJXFqZ8P(x6X!v`Q/)@r1cq>(i/*~ Kb)u?l@:FnxKWWSKhHV:' );
define( 'NONCE_SALT',       '$LPR-KOu`?54T6VG1Z{=y$hOz7l*ox!|qu0]jB_#VSZf5NlVV8k#$;HToA2FPqS3' );

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
