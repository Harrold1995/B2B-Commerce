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
define( 'DB_NAME', 'proscore_rebuild' );

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
define( 'AUTH_KEY',         'vuqqno9evnlhiw9zh8lhr6ekz4ytxlbcixypr0bfymaohkmw8jw7i23angwpkf6n' );
define( 'SECURE_AUTH_KEY',  'hcs3xnvjz4eemjzj8k8day5qriepf6pu0uxneeewvfl9ls3rfaujjtdyzrd88leq' );
define( 'LOGGED_IN_KEY',    'lzwfkm838zrhsoufsifyf41ueyut7ilnzg1wefgxzkakaiesnbpt44ulqtzesh5x' );
define( 'NONCE_KEY',        'jlczc7ldcjdmodjvmnx6kbwljd9vsh1uq9udqd3fyykcravaqm3lpqepvgiv0wo5' );
define( 'AUTH_SALT',        'mg7yywb9sol6efg9ryefepmmtbdwqddxddltsik5hgneyb0dnd62llklpwcckdof' );
define( 'SECURE_AUTH_SALT', 'pzbq0y7kchqkpgyyj4l7qcjc55iowdk7h2g7c2dfwplpmjv6647obqhveuravdht' );
define( 'LOGGED_IN_SALT',   'q4vgw7lznknsjvjfdu43jtv8sxbmoxlkpburusrkiaok5ncamhwehyyv301pydcx' );
define( 'NONCE_SALT',       'xhy05gvn3b3qm9l70rqdsptlmx9s1vumskrpyie3a9kgtosmpifozp6ejz2cnobe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplj_';

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
