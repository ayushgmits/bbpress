<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<div class="bbpress-wrapper">
    <div class="forum-title">
        <h1 class="page-title">
            <?php
            if (bbp_is_single_topic()) :
                echo esc_html(bbp_get_topic_title());
            else :
                esc_html_e('Forum', 'socialv');
            endif;
            ?>
        </h1>
        <nav class="breadcrumb">
            <a href="<?php echo esc_url(home_url()); ?>">Home</a> >
            <a href="<?php echo esc_url(bbp_get_forums_url()); ?>">Forum</a> >
            <?php if (bbp_is_single_topic()) : ?>
                <a href="<?php echo esc_url(bbp_get_forum_permalink(bbp_get_topic_forum_id())); ?>">
                    <?php echo esc_html(bbp_get_forum_title(bbp_get_topic_forum_id())); ?>
                </a> >
                <span><?php echo esc_html(bbp_get_topic_title()); ?></span>
            <?php endif; ?>
        </nav>
    </div>
</div>

	<?php do_action('bbp_template_before_single_topic'); ?>

	<?php if (post_password_required()) : ?>

		<?php bbp_get_template_part('form', 'protected'); ?>

	<?php else : ?>


		<?php if (bbp_show_lead_topic()) : ?>

			<?php bbp_get_template_part('content', 'single-topic-lead'); ?>

		<?php endif; ?>

		<?php if (bbp_has_replies()) : ?>
			<?php bbp_get_template_part('pagination', 'replies'); ?>

			<?php bbp_get_template_part('loop',       'replies'); ?>

			<?php bbp_get_template_part('pagination', 'replies'); ?>

		<?php endif; ?>

		<?php bbp_get_template_part('form', 'reply'); ?>

	<?php endif; ?>

	<?php  bbp_get_template_part('alert', 'topic-lock'); ?>

	<?php do_action('bbp_template_after_single_topic'); ?>

</div>