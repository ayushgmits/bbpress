<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

// ✅ Get reply ID safely
$reply_id = get_query_var('bbp_reply_id', false);

if (!$reply_id) {
    return; // Prevent errors if reply ID is missing
}

$reply_author_id = bbp_get_reply_author_id($reply_id);
$replying_to_id = bbp_get_reply_to($reply_id);
$replying_to = (!empty($replying_to_id) && $replying_to_id != bbp_get_topic_id()) ? '#' . $replying_to_id : 'Topic';
$reply_class = ($replying_to_id != bbp_get_topic_id() && !empty($replying_to_id)) ? 'child-reply' : 'parent-reply';

?>
<div class="replies-tab-table <?php echo esc_attr($reply_class); ?>">
    <div id="post-<?php echo esc_attr($reply_id); ?>" class="reply-item d-flex p-3 border-bottom" style="background-color: #f9f9f9;">
        
        <!-- Admin Layout -->
        <div class="author-info d-flex align-items-center">
            <div class="author-image me-3">
                <?php echo get_avatar($reply_author_id, 50); ?>
            </div>
            <div class="author-details">
                <div class="author-name fw-bold">
                    <?php echo esc_html(bbp_get_reply_author_display_name($reply_id)); ?>
                </div>
                <div class="reply-description">
                    <?php echo bbp_get_reply_content($reply_id); ?>
                </div>
                <div class="author-description text-muted">
                    <?php echo esc_html(get_the_author_meta('description', $reply_author_id)); ?>
                </div>
            </div>
        </div>

        <div class="flex-grow-1">
           

           

            <!-- Reply Actions -->
            <div class="reply-actions text-end mt-2">
                <?php do_action('bbp_theme_before_reply_admin_links'); ?>
                <div class="admin-links-wrapper">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/Clock-Icon.png'); ?>" alt="Message Icon">
                    <span class="reply-date text-muted">
                        <?php echo human_time_diff(get_the_time('U', $reply_id), current_time('timestamp')) . ' ago'; ?>
                    </span>
                    <?php bbp_reply_admin_linkw(array('id' => $reply_id, 'class' => 'text-danger me-2')); ?>
                </div>
                <?php do_action('bbp_theme_after_reply_admin_links'); ?>
            </div>
        </div>
    </div>
</div>
