<?php
namespace OTGS\PHPUnit\Tools;

define( 'OTGS_SITE_URL', 'https://domain.tld' );

define( 'OTGS_TESTS_MAIN_FILE', __DIR__ . '/../../plugin.php' );
define( 'OTGS_PATH', dirname( OTGS_TESTS_MAIN_FILE ) );

define( 'OTGS_PLUGIN_FOLDER', __DIR__ . '/../../' );
define( 'OTGS_PLUGIN_URL', OTGS_SITE_URL . '/wp-content/plugins/plugin' );
define( 'OTGS_VERSION', '1.0.0' );

define( 'WP_PLUGIN_DIR', realpath( __DIR__ . '/../../../' ) );
define( 'WPMU_PLUGIN_DIR', __DIR__ . '/../../../' );
define( 'WP_CONTENT_DIR', realpath( __DIR__ . '/../../../../' ) );

define( 'WP_CONTENT_URL', OTGS_SITE_URL . '/wp-content' );
define( 'WP_PLUGIN_URL', OTGS_SITE_URL . '/' . WP_CONTENT_URL . '/plugins' );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', realpath(OTGS_PATH . '/../../../') );
}
