<?php
/**
 * Plugin Name: My Awesome Plugin
 * Description: A plugin to demonstrate how to use Composer, npm, Node.js, ES6, Webpack, and Babel with WordPress.
 * Version: 1.0
 * Author:  Tuba Saif
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue the JavaScript file
function my_awesome_plugin_enqueue_scripts() {
    wp_enqueue_script('my-awesome-plugin-script', plugins_url('./dist/bundle.js', __FILE__), array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_awesome_plugin_enqueue_scripts');
