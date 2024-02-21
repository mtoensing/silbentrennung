<?php
/**
 * Plugin Name: Silbentrennung
 * Plugin URI: http://yourwebsite.com/silbentrennung
 * Description: Adds CSS for text hyphenation across the site.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://toensing.com
 */

function silbentrennung_enqueue_styles() {
    wp_add_inline_style( 'wp-block-library', 'body { hyphens: auto; -webkit-hyphens: auto; }' );
}

add_action( 'wp_enqueue_scripts', 'silbentrennung_enqueue_styles' );
