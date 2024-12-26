<?php

define('MD_PATH', get_stylesheet_directory_uri());

function md_enqueue_assets() {
    // Enqueue the custom JS file
    wp_enqueue_script('md-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

    // Pass the theme directory URL to JS
    wp_localize_script('md-main-script', 'mdData', array(
        'md_path' => get_stylesheet_directory_uri(), // URL of the child theme
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('md_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'md_enqueue_assets');
