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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eLj68D25WrDqUa+IxwUGjI7YFQ1gck0Qnvq/yoUIwZe4fNq1hnU0Fftp4hIjTQgzGO1MNoFYGNE6C7v6dCjsyA==');
define('SECURE_AUTH_KEY',  'xYO3En1xm+pDZCp0Me/fpehPtmcJh1VBz4DMoRRZBoU+TEJW1WfknAWJkdu2ehBRs8Mp1HMRpGTXmOUSbIgTiw==');
define('LOGGED_IN_KEY',    'M1mnSvRGglG5Y4RFrvpsAYSe2CH89cpsMGV1IPAFnlrG/fe07CgANUlh8ILDIxXiIJ07F2H+nyxgo/rxXmwSPw==');
define('NONCE_KEY',        'x4vtY0WjvKzLEK0hwmuevKLVizTVoFlvccEN0Tmw0WVb/UXbJdnNSmnPRHAHxkSDFttg2y9uiGusopt+HUoANw==');
define('AUTH_SALT',        'adMj0151klLLvPPoPb13VbrJOFkJChe8pTkL8Bdh72XGSdkXvoovWcZg8nC53+Xq28O1mIS27DC/5mF5/MeYwA==');
define('SECURE_AUTH_SALT', 'zA+TdoCUV+x0zXoZejoINfGadKP4te+PlA+1ErJ4lzqkOyIzMKYIOxkNx6j30au+6o7GlWzeJmG/HTtMgWvKxw==');
define('LOGGED_IN_SALT',   'KO+D1uN2qcSiybW2AL5Y7yPmF+lzHoWDWLK3eDQxTnSzjR+M5sJyNLd68NnWrbwf6GJEfF+E/1x9gP+m9ad7rg==');
define('NONCE_SALT',       'DqwGYW9ADsIioStIhtpu7gtT57FWvPtTuVFLUJv33DjOmF0JgwUAEcEIX1ix1FCid5VsdgIeoE5SqyvLabXCsQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
