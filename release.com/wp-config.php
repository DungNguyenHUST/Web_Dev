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
define( 'DB_NAME', 'wp314' );

/** MySQL database username */
define( 'DB_USER', 'wp314' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zpSj-.2u95' );

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
define( 'AUTH_KEY',         'mx6ewl8wublj4oe5rebhp6zpl2sdvntbvul4jrvqlq1bgviwu5df33rmotdq9dlj' );
define( 'SECURE_AUTH_KEY',  'saa0rl82axkczbykjhszczvebudxxmxegum2racftltrptvniporp0iixrzi4tgq' );
define( 'LOGGED_IN_KEY',    'xvqedeczxmgpte7mr85wchrdjdo6jfevas63wpc0tuw3emc5hpg5aiiuum8r1ql6' );
define( 'NONCE_KEY',        'nawcj1djythejovdj19gfndhwuhqmj13iegbpampqxzpyub03crytnaq0njil8bn' );
define( 'AUTH_SALT',        'on2ynruucqwrtmb9tdqour24puxp51jbpfyy7mvaffzqqs4tpmycybv6rbtuk2wf' );
define( 'SECURE_AUTH_SALT', 'zghozagmasquoqeqggy93jso8hhwvxu2n1z5cbnffhygjvuhfvx8q1kj3xwk1wra' );
define( 'LOGGED_IN_SALT',   'ndpuqxx0niz0l1ngtfhapdd871db2sjlihyvbfrigfenffa0hmktofauabc1peji' );
define( 'NONCE_SALT',       'cc9lxqn6dqaq836v6abuxkhanpiprxi0mi14inw1omptiqeldnfskj4yzme5jp1q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpku_';

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
