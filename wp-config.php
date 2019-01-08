<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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

// Load the config from the current enviroment (WP_ENV)
switch(getenv('WP_ENV'))
{
  case "production":
    include(dirname(__FILE__).'/wp-config.production.php');
  break;
  case "sandbox":
        include(dirname(__FILE__).'/wp-config.sandbox.php');
  break;
  case "development":
    include(dirname(__FILE__).'/wp-config.development.php');
  break;
}

define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('WP_AUTO_UPDATE_CORE', false);


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'ygecySq3oYmpT9eYkbXa+sCxbOSNhQrhaDi0kpqt7rE=');

define('SECURE_AUTH_KEY',  'HFFl9YbKsFD8BrDSLUDCyFc4NLR7MI/0bJZTSvVtsTk=');

define('LOGGED_IN_KEY',    'FM4AOZdQYMBZ46xFD+tWJufX4voe7kZ726qDZttsTtU=');

define('NONCE_KEY',        '28KzOX68jrV1w8ycR4ogtt0dlGNoawx+AdoBolpP8qA=');

define('AUTH_SALT',        'iq7W0uWsVqxK77rPzTg2UJLDjV6CpWEyuONcLc4h8Fg=');

define('SECURE_AUTH_SALT', 'l8KVbxcMgUxxOI68PVzhuu9tvj2pQ+SQjJBxXIELgQk=');

define('LOGGED_IN_SALT',   'UQN4oFFjN0fe7MXf6S+lQauWkCSb/54om/TnU2mUu18=');

define('NONCE_SALT',       'fYNi+yMdTk5rhOs/qB6p+X2OUvh2MDJygRPGk1HcaK4=');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



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

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

