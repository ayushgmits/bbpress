<?php

/**
 * New/Edit Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;
?>
<div class="card-main clear-both  socialv-forum-topic-card card-space">
	<div class="card-inner">
		<?php
		if (bbp_is_reply_edit()) : ?>
			<div id="bbpress-forums" class="bbpress-wrapper">

			<?php endif; ?>

			<?php if (bbp_current_user_can_access_create_reply_form()) : ?>

				<div id="new-reply-<?php bbp_topic_id(); ?>" class="bbp-reply-form">

				<form id="new-post" name="new-post" method="post" class="d-flex align-items-center">

				<div class="author-image me-3">
					<?php echo get_avatar(bbp_get_current_user_id(), 40); ?>
				</div>

				<div class="flex-grow-1">
					<textarea name="bbp_reply_content" class="form-control" placeholder="Reply to: <?php echo esc_attr(bbp_get_reply_author_display_name()); ?>" required></textarea>
				</div>

				<button type="submit" id="bbp_reply_submit" name="bbp_reply_submit" class="btn btn-success ms-2">
					<?php esc_html_e('Reply', 'socialv'); ?>
				</button>

				<?php bbp_reply_form_fields(); ?>
				</form>

				</div>

			<?php elseif (bbp_is_topic_closed()) : ?>

				<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
					<div class="bbp-template-notice">
						<ul>
							<li><?php printf(esc_html__('The topic &#8216;%s&#8217; is closed to new replies.', 'socialv'), bbp_get_topic_title()); ?></li>
						</ul>
					</div>
				</div>

			<?php elseif (bbp_is_forum_closed(bbp_get_topic_forum_id())) : ?>

				<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
					<div class="bbp-template-notice">
						<ul>
							<li><?php printf(esc_html__('The forum &#8216;%s&#8217; is closed to new topics and replies.', 'socialv'), bbp_get_forum_title(bbp_get_topic_forum_id())); ?></li>
						</ul>
					</div>
				</div>

			<?php else : ?>

				<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
					<div class="bbp-template-notice">
						<ul>
							<li><?php is_user_logged_in()
									? esc_html_e('You cannot reply to this topic.',               'socialv')
									: esc_html_e('You must be logged in to reply to this topic.', 'socialv');
								?></li>
						</ul>
					</div>

					<?php if (!is_user_logged_in()) : ?>

						<?php bbp_get_template_part('form', 'user-login'); ?>

					<?php endif; ?>

				</div>

			<?php endif; ?>

			<?php if (bbp_is_reply_edit()) : ?>

			</div>
		<?php endif;
		?>

	</div>
</div>