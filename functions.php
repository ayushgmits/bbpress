<?php

define('MD_PATH', get_stylesheet_directory_uri());

add_action('wp_enqueue_scripts', 'md_enqueue_assets');
add_action('init', 'options_define');

function options_define() {
    $options = [
        'md_path' => get_stylesheet_directory_uri(),
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('md_nonce'),
        'user_profile_url' => get_permalink(get_page_by_path('user-profile')),
        'edit_profile_url' => get_permalink(get_page_by_path('edit-profile')),
    ];
    update_option('md_options', $options);
}

function my_enqueue_scripts() {
    wp_enqueue_script('your-custom-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    
    wp_localize_script('your-custom-js', 'mdData', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

/**
 * Shortcode to display like and view count
 */
function display_like_and_view_count() {
    global $post;

    $view_count = get_post_meta($post->ID, 'view_count', true) ?: 0;
    $like_count = get_post_meta($post->ID, 'like_count', true) ?: 0;

    $user_id = get_current_user_id();
    $liked = false;

    if ($user_id) {
        $liked = get_post_meta($post->ID, 'user_likes_' . $user_id, true);
    }

    $icon_class = $liked ? 'fa-solid liked' : 'fa-regular';
    
    $output = '<p>';
    $output .= '<i class="fa ' . $icon_class . ' like-icon" data-post-id="' . esc_attr($post->ID) . '"></i> ';
    $output .= '<span class="like-count">' . intval($like_count) . '</span>';
    $output .= ' | <i class="fa fa-eye"></i> ' . intval($view_count);
    $output .= '</p>';

    return $output;
}
add_shortcode('views', 'display_like_and_view_count');


/**
 * Start session
 */
function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session', 1);

/**
 * Increment post view count
 */
function increment_post_view_count() {
    if (is_single() || is_archive()) {
        global $post;
        $user_id = get_current_user_id();
        $view_count = (int) get_post_meta($post->ID, 'view_count', true);

        if ($user_id > 0) {
            $user_viewed = get_post_meta($post->ID, 'user_view_count_' . $user_id, true);
            if (!$user_viewed) {
                update_post_meta($post->ID, 'view_count', $view_count + 1);
                update_post_meta($post->ID, 'user_view_count_' . $user_id, 1);
            }
        } else {
            $session_id = session_id();
            $session_viewed = get_post_meta($post->ID, 'session_viewed_' . $session_id, true);

            if (!$session_viewed) {
                update_post_meta($post->ID, 'view_count', $view_count + 1);
                update_post_meta($post->ID, 'session_viewed_' . $session_id, 1);
            }
        }
    }
}
add_action('wp_head', 'increment_post_view_count');

/**
 * Clear session on footer load
 */
function clear_user_session() {
    if (session_id()) {
        session_destroy();
    }
}
add_action('wp_footer', 'clear_user_session');

/**
 * Handle AJAX like action
 */
add_action('wp_ajax_like_action', 'handle_like_action');
add_action('wp_ajax_nopriv_like_action', 'handle_like_action');

function handle_like_action() {
    if (!isset($_POST['post_id'])) {
        wp_send_json_error('Invalid request');
    }

    $post_id = intval($_POST['post_id']);
    $user_id = get_current_user_id();

    if (!$user_id) {
        wp_send_json_error('User not logged in');
    }

    $liked = get_post_meta($post_id, 'user_likes_' . $user_id, true);
    $like_count = get_post_meta($post_id, 'like_count', true);
    $like_count = $like_count ? (int) $like_count : 0;

    if ($liked) {
        // Unlike
        delete_post_meta($post_id, 'user_likes_' . $user_id);
        $like_count = max(0, $like_count - 1);
        update_post_meta($post_id, 'like_count', $like_count);

        wp_send_json_success([
            'liked' => false,
            'like_count' => $like_count,
        ]);
    } else {
        // Like
        update_post_meta($post_id, 'user_likes_' . $user_id, 1);
        $like_count = $like_count + 1;
        update_post_meta($post_id, 'like_count', $like_count);

        wp_send_json_success([
            'liked' => true,
            'like_count' => $like_count,
        ]);
    }
}

