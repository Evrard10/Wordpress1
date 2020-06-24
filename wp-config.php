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
define( 'DB_NAME', 'WordpressTest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bb@0770560063' );

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
define( 'AUTH_KEY',         '0c1&Pa=mwPL;KW|~b$^r=;cKqyTs`#;6|[np*!@ol=cH+l`7. 36eM;m=19V&4$(' );
define( 'SECURE_AUTH_KEY',  '/?+^F&MJvHGrHGk;&g4@DK/(,{VY|-ZJ.)!8[hUVm,LO=5]D+xf$sob 7H I$`2l' );
define( 'LOGGED_IN_KEY',    'RM0g~ |HB&|,7*aIoBMb^;!BPW>gu{hWR=&h#|IJ%iq)oTe3EYs/d2I|[2+W(#Z[' );
define( 'NONCE_KEY',        'a>9Tbng*CJ/=;02IBIP PlkEP#.FZAjm$FgU!e~nK[#nbqP>I9dSZ-/E]J?+75e(' );
define( 'AUTH_SALT',        '}!h.^C98L%r!CYB2km~o}m`Z=|t^_r5sE0d`{|+{SVjL3,}nuuIJs|$3!.70()fA' );
define( 'SECURE_AUTH_SALT', 'lcVDqIAFJoyRIf$5]YBdW0uWF}=~`ht6!!kF%V*#$P0<,p4&7p<`E ]%RXO:6_#q' );
define( 'LOGGED_IN_SALT',   'BiS@8_wG^B[.sZ@-}W9tcPnwGX.ojU37l|[y.O:F3I$ QvNY+cY;aP:~F79lj9N4' );
define( 'NONCE_SALT',       'L-I0Xw4jnB!}e|-(NLi|(a6*@zPrYp997x//bf @,a^P43#+DwVIXVzcG0@Dnwv#' );

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
