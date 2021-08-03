<?php
/**
 * Plugin Name: Initial Plugin
 * Plugin URI: wpcommerz.com
 * Description: Here is basic functionalities of pro version
 * Version: 1.0.0
 * Author: Shakhawat
 * Author URI: shakhawat.me
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpcommerz
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


//Require autoload files
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Base class of plugin
 *
 * @since 1.0.0
 */
final class Wpcommerz_Plugin {

    /**
     * Plugin version 
     *
     * @var string version
     */
    const version = '1.0.0';

    /**
     * Class construct of Wpcommerz_Plugin
     * 
     * Setup required hooks and actions
     *
     * @return void
     */
    public function __construct() {
        
        $this->wpcommerz_define_constants();
        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] ); 
    } 

    /**
     * Define all constants
     *
     * @return void
     */
    public function wpcommerz_define_constants() {
        define( 'WPCOMMERZ_VERSION', self::version );
        define( 'WPCOMMERZ_FILE', __FILE__ );
        define( 'WPCOMMERZ_DIR', __DIR__ );
        define( 'WPCOMMERZ_URL', plugins_url( '', WPCOMMERZ_FILE ) );
        define( 'WPCOMMERZ_ASSETS', WPCOMMERZ_URL . '/assets' );
        define( 'WPCOMMERZ_BASE', plugin_basename( WPCOMMERZ_FILE ) );
    }

    /**
     * Plugin init callback
     *
     * @since 1.0.0
     *
     * @param null
     *
     * @return void
     */
    public function init_plugin() {
        new Wpcommerz\Wpcommerz_Custom_Post();
        new Wpcommerz\Wpcommerz_Meta_Boxes();
    }

    /**
     * Singleton instance
     * 
     * @param null
     *
     * @return \Wpcommerz_Plugin
     */
    public static function init() {
        static $instantiate = false;

        if( ! $instantiate ) {
            $instantiate = new self();
        }
        return $instantiate;
    }
}

//Kickoff plugin
function wpcommerz_instance() {
    return Wpcommerz_Plugin::init();
}
wpcommerz_instance();