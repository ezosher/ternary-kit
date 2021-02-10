<?php
/*
Plugin Name: Ternary kit Conditions Pack for Oxygen
Author: Osherez
Version: 1.0
Description: Plugin that extend the Oxygen Builder condition API
 */

defined('ABSPATH') or die('Nope, not accessing this');

// Plugin path
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

add_action('plugins_loaded', 'ternary_kit_init');
function ternary_kit_init()
{
    // check if Oxygen Conditions available installed and active
    if (!function_exists('oxygen_vsb_register_condition')) {
        return;
    }

    /**custom Conditions**/
    include "inc/conditions.php"; // Custom conditions

}
