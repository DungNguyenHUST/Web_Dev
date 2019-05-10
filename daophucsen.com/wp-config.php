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
define( 'DB_NAME', 'wp567' );

/** MySQL database username */
define( 'DB_USER', 'wp567' );

/** MySQL database password */
define( 'DB_PASSWORD', '2I6Sq@7)hp' );

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
define( 'AUTH_KEY',         'kd8oczjg6g7oivvxfo1ffdejc1evmrqsnjcw1ury3z9ahedfis0mt2anjq6hqlwu' );
define( 'SECURE_AUTH_KEY',  'pfxwhpdwu7po0jdh236dgkbgo4g7mnmxxa2locv9vpcemt1vvbzuvwkzgdsnlkom' );
define( 'LOGGED_IN_KEY',    'hbbo1mcpumctzp2q7aggh4nkhrg6fidg9ws4r6dkq6kc28cvtx3yf3usxoagnymy' );
define( 'NONCE_KEY',        'hrucivk3xdjs3zf6n4trzmrzrfcuka4khtfbs1fjpxdzq4ke4fqwyckjhgiomwku' );
define( 'AUTH_SALT',        '34ryyegv86poionafdrxlztg6dph4ekpvjkkwm2d0x4hc2laihozmhmchne4qvqz' );
define( 'SECURE_AUTH_SALT', '2koestfikofv2uad472ipt8ni6demkzrkxpz829yklfdtft2gxgokfr03ikxdl13' );
define( 'LOGGED_IN_SALT',   'qfwa2eik75bsbgogsd2dmbcz63r83yotvmeip8umkuc8mwlgtcqsjj1ouaaeox6f' );
define( 'NONCE_SALT',       'qgqovhkalzgs8qdhmsudmknb1o4elhlg3oheapsqw4ekbxskfotnjzquixsgdovb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbh_';

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
