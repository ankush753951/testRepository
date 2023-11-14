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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         '.8{4{D`]3M6?rnrCvSdVaA++%wafIQ&CMK-#-Z,ICVOa-6=|Dxggt3#Ar*Y@^4>B' );
define( 'SECURE_AUTH_KEY',  'm*mpUc!j.7CS9]EVlgyTiYuKblN2iSqLC3&^twi9BU]Lm>S|< 4.~^LZ?|Un`Wro' );
define( 'LOGGED_IN_KEY',    'rO|vIDKAGdNvkcs|:!$_FZ8(c}CD>QQrq]i,*pfpDr6kmkCT*-Y={~Z&R_?`US~`' );
define( 'NONCE_KEY',        'W+Wy6<@UYaAx(xS}atFr$Vx9fH?o+p ToV5A?cr5y3YW0d?:H75x%P%-YLR_44oh' );
define( 'AUTH_SALT',        'f:wMp.#g}YiqZbG)YF]Wwhr`&wUtYJ[.1`+~tIUCaH DKKto&OqvL-JgacqRO2rR' );
define( 'SECURE_AUTH_SALT', 'c b9b{w*0keJnS8q]~da^Ky&wJc}yxay-:okn@4j?lP@+a;1KOGgX@IsiDd/2tD1' );
define( 'LOGGED_IN_SALT',   'q&1{,P<6`G#2R..$IBuHY]Db6EN0da*VB0bh~!E,Hk@KSa6S8`Jn#wF(>/]}>?x`' );
define( 'NONCE_SALT',       '-Dxo?HQu=q2s7?AAF+3_>Y(0IAG^qq;EJEc5<I0RhJsq}?-A*TXQyy8wpG,Rr ]%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
