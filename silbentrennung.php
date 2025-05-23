<?php
/**
 * Plugin Name: Silbentrennung
 * Plugin URI: http://toensing.com/
 * Description: Adds CSS for text hyphenation across the site.
 * Version: 2.0
 * License: GPLv2 or later
 * Author: Marc Tönsing
 * Author URI: https://toensing.com
 */

function silbentrennung_enqueue_styles() {
    wp_add_inline_style( 'wp-block-library', 'body { hyphens: auto; -webkit-hyphens: auto; }' );
}

add_action( 'wp_enqueue_scripts', 'silbentrennung_enqueue_styles' );
