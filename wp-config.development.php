<?php
/**
  Url rewrite
*/
define( 'ACTUAL_HOST', $_SERVER['HTTP_HOST'] );
define( 'ADMIN_HOST', 'rosehillbowlingclub-dev' );

ob_start( function ( $page ) {
    return str_replace( ADMIN_HOST, ACTUAL_HOST, $page );
} );

// MySQL settings
define('DB_NAME', 'wp_rosehill_bowling_development');
define('DB_USER', 'master');
define('DB_PASSWORD', '$jvJgNGg!N-Sct2W');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Debug
define('WP_DEBUG', false);

