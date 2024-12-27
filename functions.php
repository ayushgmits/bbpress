<?php

define('MD_PATH', get_stylesheet_directory_uri());

add_action('wp_enqueue_scripts', 'md_enqueue_assets');
add_action('init', 'options_define');

function options_define(){
    $options = [
        'md_path' => get_stylesheet_directory_uri(),
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('md_nonce'),
        'user_profile_url' => get_permalink( get_page_by_path( 'user-profile' ) ),
        'edit_profile_url' => get_permalink( get_page_by_path( 'edit-profile' ) ),
    ];
    update_option('md_options', $options);
}

function md_enqueue_assets() {
    // Enqueue the custom JS file
    wp_enqueue_script('md-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

    // Pass the theme directory URL to JS
    wp_localize_script('md-main-script', 'mdData', get_option('md_options'));
}
