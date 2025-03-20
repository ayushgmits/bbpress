<?php

// Get the topic ID
$topic_id = bbp_get_topic_id();

// Get topic details
$topic_title = bbp_get_topic_title($topic_id);
$topic_content = bbp_get_topic_content($topic_id);
$topic_author_id = bbp_get_topic_author_id($topic_id);
$topic_post_date = get_the_date('U', $topic_id); // Get post date as timestamp
$time_ago = human_time_diff($topic_post_date, current_time('timestamp')) . ' ago';

// Get author details
$author_name = get_the_author_meta('display_name', $topic_author_id);
$author_avatar = get_avatar($topic_author_id, 48); // 48px avatar size for a cleaner look

// Initialize arrays for parent and child replies
$parent_replies = [];
$child_replies  = [];

// Loop through all replies and categorize them
while (bbp_replies()) : bbp_the_reply();
    $reply_id = bbp_get_reply_id();
    $parent_id = bbp_get_reply_to($reply_id);

    // If the parent ID is the topic ID or empty, it's a parent reply
    if ($parent_id == bbp_get_topic_id() || empty($parent_id)) {
        $parent_replies[$reply_id] = $reply_id; // Store parent replies
    } else {
        $child_replies[$parent_id][] = $reply_id; // Store child replies
    }
endwhile;

// Function to call the template part for a reply
function display_reply($reply_id) {
    set_query_var('bbp_reply_id', $reply_id); // Set reply ID for use in the template

    bbp_get_template_part('loop', 'single-reply');
}
?>

<!-- Topic Details -->
<div class="single-topic-details" style="margin-bottom: 30px;">
    <div class="single-topic-author" style="display: flex; margin-bottom: 20px;">
        <div class="single-topic-author-details" style="flex-shrink: 0;">
            <?php echo $author_avatar; ?>
            <p class="single-topic-author-name" style="margin: 0; font-weight: bold;"><?php echo esc_html($author_name); ?></p>
            <p class="single-topic-author-date" style="margin: 0; color: #888; font-size: 14px;"><?php echo esc_html($time_ago); ?></p>
        </div>
        <div class="single-topic-author-title-con" style="flex-grow: 1; padding-left: 10px;">
            <h4 class="single-topic-author-title" style="margin: 5px 0; font-weight: bold;"><?php echo esc_html($topic_title); ?></h4>
            <p class="single-topic-author-con" style="margin: 0; color: #333;"><?php echo wp_kses_post($topic_content); ?></p>
        </div>
    </div>
<?php
// Display Parent Replies First, then Child Replies
foreach ($parent_replies as $parent_id) {
    display_reply($parent_id);

    if (!empty($child_replies[$parent_id])) {
        foreach ($child_replies[$parent_id] as $child_id) {
            display_reply($child_id);
        }
    }
}
?>
</div> <!-- Closing for .single-topic-details -->
