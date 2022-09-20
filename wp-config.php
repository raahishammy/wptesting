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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '~S],`?KXIiO&:|eFzkyl^nm8>O=&z?G{9+/~-Cu}b-d#u,%&hSlgf?$q6({)dLN]' );
define( 'SECURE_AUTH_KEY',  'Xti>3}$Kg;0M7V=wadE n^I,(R-SfZ=|~3#!G8F;4TB=p+T!%N-4PMZW`MiDeEsI' );
define( 'LOGGED_IN_KEY',    '<=TWm!MrhxtSuDK>|RFjiZGqiXef&6*ahbx=2<[EpUqiuiXazp%9ygig1yEiN,|D' );
define( 'NONCE_KEY',        '}v$1qf`kG9Jd[`:ChATk $0[7.M0pqJnn1c0Z98A%%d|gU_;rfwwL48hzlC+N*?g' );
define( 'AUTH_SALT',        '[$e:8.dx]l4vv@DUyM>!!V))ey=B#3QU)z3=c8d`b)[ca|n3o47v4uD9L3[JjeA.' );
define( 'SECURE_AUTH_SALT', 'f+&W07lFBI@f[L;cH/VN;gb1Q}m *?=y`h*kVVRqY@^p@=S}}_HkS|wUm/v$J!#%' );
define( 'LOGGED_IN_SALT',   'hY3}!pF6[X_F?RaU]&9(cq17Y];&)UU>@.,)xOB&_{t@KxjIP!^f870=]MR]_nL{' );
define( 'NONCE_SALT',       'Ic)G~K(jLGz$w:?73&B</7w^KABZ>[%6V|%(*`Yf7d:@BA#u9d{oP:53?E/K.|]P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptest_';

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
