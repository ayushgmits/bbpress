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

    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

    // Localize the ajaxurl to pass it to the JavaScript (correcting the array usage)
    wp_localize_script('main-js', 'ajax_object', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
    
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}

    /**
     * Display the like and view count for a post.
     * 
     * This function retrieves and displays the like and view counts for the current post. 
     * It adds these counts to the post's content when the user views a single post or an archive page.
     * The like count is displayed as a clickable icon, and the view count is shown as a number.
     * 
     * @param string $content The current post content.
     * @return string Modified content with the like and view counts appended.
     */
    function display_like_and_view_count() {
        global $post;

        // Get the global view count (shared across all users)
        $view_count = get_post_meta($post->ID, 'view_count', true);
        if (!$view_count) {
            $view_count = 0;
        }

        // Get the like count for the post
        $like_count = get_post_meta($post->ID, 'like_count', true);
        if (!$like_count) {
            $like_count = 0;
        }

        // Return the like and view counts as a string
        $output = '<p>';
        $output .= '<i class="fa fa-heart like-icon" data-post-id="' . $post->ID . '"></i> <span class="like-count">' . $like_count . '</span> ';
        $output .= '| <i class="fa fa-eye"></i> ' . $view_count;
        $output .= '</p>';

        // Log to debug
        error_log("Output: " . print_r($output, true));

        return $output;  // Ensure it returns a string
     }
    add_shortcode('views', 'display_like_and_view_count');


    /**
     * Start a session if it hasn't been started already.
     * 
     * This function ensures that a session is started on the page load if no session has been initiated yet.
     * It is called during the WordPress `init` action with priority 1 to ensure it runs early in the page load process.
     * The session is necessary for tracking user activity across different pages for things like views or likes.
     */
    function start_session() {
        if (!session_id()) {
            session_start();
        }
    }
    add_action('init', 'start_session', 1);  // Priority 1 ensures it's early

    /**
     * Increment the post view count and track user or session-based views.
     * 
     * This function is responsible for tracking the number of views on a post. It increments the global view count
     * when a post is viewed by a logged-in user or a guest. The function also ensures that views are only counted once
     * per user or session by checking if the user has already viewed the post.
     * 
     * For logged-in users, the view count is tracked per user, while for guests (non-logged-in users), a session ID
     * is used to track views.
     * 
     * This function is hooked to the `wp_head` action to ensure the view count is incremented on the page load.
     */

 function increment_post_view_count() {
        if (is_single() || is_archive()) {
            global $post;
            $user_id = get_current_user_id();
            
            // Get the global view count (total view count for all users)
            $view_count = get_post_meta($post->ID, 'view_count', true);
            if (!$view_count) {
                // Initialize the view count if it doesn't exist
                update_post_meta($post->ID, 'view_count', 0);
                $view_count = 0;
            }

            // For logged-in users: track views by user ID
            if ($user_id > 0) {
                // Check if this user has already viewed the post
                $user_viewed = get_post_meta($post->ID, 'user_view_count_' . $user_id, true);

                if (!$user_viewed) {
                    // If not viewed, increment the global view count and mark this post as viewed by the user
                    update_post_meta($post->ID, 'view_count', $view_count + 1);  // Increment global view count
                    update_post_meta($post->ID, 'user_view_count_' . $user_id, 1);  // Mark the post as viewed by this user
                }
            } else {
                // For guests (non-logged-in users), track by session ID to prevent double counting
                $session_id = session_id();
                $session_viewed = get_post_meta($post->ID, 'session_viewed_' . $session_id, true);
                echo $session_viewed;

                if (!$session_viewed) {
                    // If the session hasn't viewed the post, increment the global view count and mark the session as having viewed
                    update_post_meta($post->ID, 'view_count', $view_count + 1);  // Increment global view count
                    update_post_meta($post->ID, 'session_viewed_' . $session_id, 1);  // Mark the session as having viewed
                }
            }
        }
    }
    add_action('wp_head', 'increment_post_view_count');

    /**
     * Clear the current user's session data.
     * 
     * The session is destroyed when the user reaches the footer of the page, which is handled by hooking into the 
     * `wp_footer` action.
     */
    
    function clear_user_session() {
        if (session_id()) {
            session_destroy(); // Destroys all session data
        }
    }
    add_action('wp_footer', 'clear_user_session'); // This will clear the session when you visit the page

    /**
     * Handle the like action via AJAX.
     * 
    * This function is hooked to both logged-in and non-logged-in AJAX actions to handle both user types:
    * - `wp_ajax_like_post`: For logged-in users.
    * - `wp_ajax_nopriv_like_post`: For non-logged-in users.
    */
    
    function handle_like_action() {
    if (isset($_POST['post_id'])) {
        $post_id = $_POST['post_id'];
        $user_id = get_current_user_id();

        if ($user_id) {
            // Get the current like count and user like status
            $like_count = get_post_meta($post_id, 'like_count', true);
            $user_like_status = get_post_meta($post_id, 'user_likes_' . $user_id, true);

            if (!$like_count) {
                $like_count = 0;
            }

            if ($user_like_status == true) {
                // If already liked, remove the like
                update_post_meta($post_id, 'like_count', max(0, $like_count - 1)); // Prevent negative values
                update_post_meta($post_id, 'user_likes_' . $user_id, false); // Update to not liked
                echo 'disliked';
            } else {
                // If not liked, add the like
                update_post_meta($post_id, 'like_count', $like_count + 1);
                update_post_meta($post_id, 'user_likes_' . $user_id, true); // Update to liked
                echo 'liked';
            }
        }
    }
    wp_die(); // Properly terminate the AJAX request
}
add_action('wp_ajax_like_post', 'handle_like_action');  // For logged-in users
add_action('wp_ajax_nopriv_like_post', 'handle_like_action');  // For non-logged-in users
