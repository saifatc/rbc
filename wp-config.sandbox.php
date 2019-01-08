<?php
/**
  Url rewrite
*/
define( 'ACTUAL_HOST', $_SERVER['HTTP_HOST'] );
define( 'ADMIN_HOST', 'www.rosehillbowlingclub.com.au' );

ob_start( function ( $page ) {
    return str_replace( ADMIN_HOST, ACTUAL_HOST, $page );
} );

// MySQL settings
define('DB_NAME', 'wp_rbc_test');
define('DB_USER', 'atc2018');
define('DB_PASSWORD', '$jvJgNGg!N-Sct2W');
define('DB_HOST', 'atc-test-rds.caeucmlxda8d.ap-southeast-2.rds.amazonaws.com');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Debug
define('WP_DEBUG', false);

