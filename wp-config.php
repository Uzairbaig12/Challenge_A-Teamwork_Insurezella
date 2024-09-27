<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'traininghostidom_wp_dev_theme' );

/** Database username */
define( 'DB_USER', 'traininghostidom_wp_dev_theme' );

/** Database password */
define( 'DB_PASSWORD', '4pzy7[3@Sw' );

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
define( 'AUTH_KEY',         'nk7bhgvmvkhgjljwpnahltylktimvmry5dqeakgabyps8d1efyfkrfxdy2i5lpyg' );
define( 'SECURE_AUTH_KEY',  'iftfzlhstjxsrvsz32c21ib6slvlxiogxzukd7bvde440dzxlfacpk1nmds4l3m3' );
define( 'LOGGED_IN_KEY',    'bcblooxmxqeblfxicr1p7wodqqz1duuwaeiiewozd2yatjqv747ufcxh5nzwdfcq' );
define( 'NONCE_KEY',        'y6nnlb8xc2gn9yjdorimvo5gwbclo8rcznzev8788twcokw0xjderoiqs2atovvb' );
define( 'AUTH_SALT',        'pc3hpe4lererzlympyqj6z6v9lhnlmceeczwklt4xkfgg2l68ztnog7vxfrltnnz' );
define( 'SECURE_AUTH_SALT', 'zupgcslucjvmkl4kqya9xyowbtfmsvy1h2phd7klhizz8vd8rzlpprqvjvec2owq' );
define( 'LOGGED_IN_SALT',   'm2hrvwylgfo6i7gnfyncvfkmc0qm7jxjfd2wh7xkk38lfrqvmqkr6mg2dq3xbloj' );
define( 'NONCE_SALT',       '5xxbu8uj6csfnqgjmz7jsx2zix9re2pi9mcnjjsu7nxtagozuotxasuo49ispnhc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpob_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
