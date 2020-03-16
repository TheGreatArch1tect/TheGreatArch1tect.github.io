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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'QKmC&gkTo8=KdE#t)3!Pl@X!Ty.Lq,x-}(V btF.QEmR$i{ v`b >r-LI*7)!g,w' );
define( 'SECURE_AUTH_KEY',  'Yi-L32v^~07Q//bnZv*L27PPeEKGDZYT@DQ(2G<M0N<#H&/A|g(Z{-|&H{+=Hnab' );
define( 'LOGGED_IN_KEY',    'Q/9m>{P[GJB!;V=jL<P.}}R {b5DNY|*.h)/e$s*w+X%sQGsoZZ!87i}a1jB5~zF' );
define( 'NONCE_KEY',        'XI)),ywJbCWD6t7sc.rO9cT?B~2_w]2)nVA4rhAR?SoMg0~J;MwaNlsi*Tc$:1$}' );
define( 'AUTH_SALT',        '|~n9rn2B[42Xo|f4Zk<@;>8m,I-FEsn6)>a/v+6zBk<Wm*tPiMM/(bogq-8=v:Db' );
define( 'SECURE_AUTH_SALT', '6q,YL*dn1-Y;75V>_183Zz9ExMOHF9Bx{x#XR/aUH>F<%0l3o-QgrXUT{s5Io/#*' );
define( 'LOGGED_IN_SALT',   '=G&d1!eq~Y=O?L3D;{+Q9#;Jq*l[/X7Vfc#dyP0TGiV:J];.tZPQ]@ U/3u+?wVx' );
define( 'NONCE_SALT',       '$8QMU7o9R`7r@.%Jk1Gg0N921shM:!-^8&SD2kg zvTl3LjZj!@1DAjcm%7}>2_!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
