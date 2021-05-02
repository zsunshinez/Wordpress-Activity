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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.S(awv@VNC0^!%3(J1tJ5n*CqNfi][f3*Pw3p2t+a{KQtY,NG+~,xDnvqu4MwDo_' );
define( 'SECURE_AUTH_KEY',  '[1Zx9!ep>ch~Z>B7Y^VZ^/zU%C|UsE{u2@dr;VQ!38HKmxgmbYNO^sH0;Q8?RuQ@' );
define( 'LOGGED_IN_KEY',    'Y|mOCN{3mm{AODQiAs*P5e*q(tv6w9w1f4-ec#IVAR`b2b$6JM@ipB>0}>v&-{O}' );
define( 'NONCE_KEY',        '?j4cgnFYC2$V1V@;m`czP@_SOAH/O1/yAg7^ejL^<1DJ$#~ISRJeb25pOitRK $Y' );
define( 'AUTH_SALT',        '>qk.>Lr3;|I6ku/5xp3KyY7bTAA%oZsfL`Ev~hrLs7c0i_r<sOt)MQ8$(xW6}ET!' );
define( 'SECURE_AUTH_SALT', '+jIM)IbhUDiV*Ao8MW[sHIB|f0@.)S_^:z:}R)O#zBgd%=G}Kg4is$Xib}0|5Y`I' );
define( 'LOGGED_IN_SALT',   'U_]ii0Kll|bBe 0md;s;cV;k1knx{88v%HQFJ7k+mH?EIv2g^D&9lcVZV}bWAJNR' );
define( 'NONCE_SALT',       'jRAH gy23j6Y81w3Uo%XNE0U9~&#AC80O)dY`8KD$%uf``QSI.XyF;7d#uM1][uO' );

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
