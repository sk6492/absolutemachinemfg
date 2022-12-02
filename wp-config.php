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
define( 'DB_NAME', 'absolutemachinemfg_db' );

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
define( 'AUTH_KEY',         'E^;O-[KQ/:Q>qO>r#Q*!863dx>0Ch%*!c_6:%P?7:jhu6P5JR^VFC}%t#xB?d60 ' );
define( 'SECURE_AUTH_KEY',  '^(Q*It&o]5]GL(M.S|3x 5]J%ghXpjJ=Pt]c}VDH,8tu=dbgYkC+j/IT]2iE|q(U' );
define( 'LOGGED_IN_KEY',    '$cEU1[n$Qi;;>6`A$J!j`#q,eE=<)!EgbX{2z2CEKeY86iKG1Qb0Vn0{g9gM;Cjc' );
define( 'NONCE_KEY',        'dJ4=6@!t%,+G=X?YVEA wk4-3(&8)0mb)6,]*Asu%X@tt(hC!cUjR<=#OQ6BB8yB' );
define( 'AUTH_SALT',        'KpKqsso6]@j,W+V{l@HK=,6ig(*b#;&c]=k}2p_n/?bsfT`?w[U.f<6X;?k48QlH' );
define( 'SECURE_AUTH_SALT', '[Bu$9rInhiG1x:qnVRmeG[Nt3j7b{fNO{WG0%qAn$z0Vy):r]G .oodLJjM>S5`Y' );
define( 'LOGGED_IN_SALT',   '78^-xGsUyp!b7.2)C-Lzd/]h9cP2WDvg=`om!`|^U*6oBzb@gDu5&[hZ_3QYd_sc' );
define( 'NONCE_SALT',       '|$Yo&F$mo@}}4*1k`=sm|SgiakEgj6CM^7CA>ulBJ1`2hiNeZgb3:*^@P:zcr,H(' );

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
