<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<tr id="bbp-topic-<?php bbp_topic_id(); ?>" <?php bbp_topic_class(); ?> style=""> 
	<td>
	<div class="bbp-topic-main">	
		<div class="bbp-topic-icon">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/Conversation-Icon.png'); ?>" alt="Message Icon" style="">
		</div>
	<div class="bbp-topic-title-con">
		<?php do_action('bbp_theme_before_topic_title'); ?>

		<h6>
			<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>"><?php bbp_topic_title(); ?></a>
		</h6>

		<p class="bbp-topic-description">
		<?php 
				$content = strip_tags(bbp_get_topic_content()); 
				$words = explode(' ', $content);
				echo implode(' ', array_slice($words, 0, 14)) . (count($words) > 14 ? '...' : ''); 
			?>
		</p>
		<div class="meta-week">
		<?php display_week_number_meta(); ?>
		</div>
		<?php do_action('bbp_theme_after_topic_title'); ?>
	</div>
	</td>
	<td style="text-align:right;">
		<span class="sv-post"><?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?> Replies</span>
		<div class="bbp-topic-meta mt-1">
			<?php do_action('bbp_theme_before_topic_started_by'); ?>
			<div class="topic-meta-box d-inline-block">
				<div class="icons-main-meta d-flex align-items-center">
					<i class="iconly-User2 icli me-1"></i>
					<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/Clock-Icon.png'); ?>" alt="Message Icon" style=""> <span class="name"><span class="posted-name">Posted by: </span><?php echo bbp_get_topic_author_link(array('type' => 'name')); ?> <?php echo human_time_diff(get_the_time('U', bbp_get_topic_id()), current_time('timestamp')) . ' ago'; ?></span>
				</div>
			</div>
			<?php do_action('bbp_theme_after_topic_started_by'); ?>
		</div>
	</td>
</tr>
