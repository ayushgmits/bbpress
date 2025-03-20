<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

do_action('bbp_template_before_topics_loop'); ?>
<div class="table-responsive mt-4 w-100">
	<table class="forums-table table bbp-topics" id="bbp-forum-<?php bbp_forum_id(); ?>">
		<?php
		while (bbp_topics()) : bbp_the_topic(); ?>

			<?php bbp_get_template_part('loop', 'single-topic'); ?>
		<?php endwhile; ?>
	</table>
</div>

<?php do_action('bbp_template_after_topics_loop');
