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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'myReacY6VNoTxigs7zWK2bzUn6YF33BaCR9FfYX9cUCqTsT75AZmImb/Rda8n7rXH/ido9erO/W1+eh0VepJqw==');
define('SECURE_AUTH_KEY',  'jdoZY920aAUymV51e5IUVFIvUfcrSJTTj+L8Ks7pn0hjVC9Gmp1hVIxPhpNFAP8xioOrNzGne01ZdXBHW3qwFA==');
define('LOGGED_IN_KEY',    'Fl4wTX24yHLln0x9lwbHOjQ9dnjxgJSqtJ1O7dOZCAfPWsVARj9GMBW2+nDRBg119c947HnZtFdKnTCamwlGmA==');
define('NONCE_KEY',        'bYxz7yUPVkTCIe9zS41EoXrF0lIZB7QmHkjc16wV6hYQ5ciXcAcEIynr4a+tH6sqncQFKdRJ0LHv9jf87xXgtw==');
define('AUTH_SALT',        's/OhUEMtgyC9YZZxLlE3qqy6dsglA+sCp3POUEF71W0CVT8w2l5faiVWD7UoeupJtpU8G+uqVGvq1HJNQLqEgA==');
define('SECURE_AUTH_SALT', '6pAuiQxrk5ZiUTO9K3Mf6qXFXc4MiXTXM7j6jqH9eYh2Zq8qOD3sgk3WPJnPdi5YFAO54UfUUF/8VRZaygboWg==');
define('LOGGED_IN_SALT',   'Uetmr0zNIMS4Pgsh7G7ZrctVf+7vFmh7wnNCUvgDnLgu0PKkDmh5SlFtLMWeV7x1+W350gM6rZgcICqEgrOnmg==');
define('NONCE_SALT',       'YS/MCZrWDM9vBf/fUBCIbcsUTInMeIjKyw6WrkP0E1t96WG4AAmc5e7IFzjniyv7lI23uoZVBNdMTpsZtCkVmw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
