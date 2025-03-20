<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

do_action('bbp_template_before_forums_loop'); ?>

<div class="forum-title">
	<h1 class="page-title">Forums</h1>
	<nav class="breadcrum">
	<a href="' . home_url() . '">Home</a> >
	<span>Forum</span>
	</nav>
</div>

	<div class="forum-rules">
		<h3> Forum Rules </h3>
		<p>Commercial messages are prohibited. La Cabana Beach Resort and Casino management reserves the right to remove anonymous messages, messages that contain blatantly offensive, foul or discriminatory language, personal attacks, false or misleading statements. Owners' access to the bulletin board will be blocked when giving out their username and password to non LBRC owners for posting. Management also reserves to right to change the format of the board in the event users do not keep to proper standards of conduct. Ask La Cabana and Talk messages may be deleted after 30 days. Rentals, resales and exchanges messages automatically delete after 45 days. Only La Cabana Units can be advertised.</p>
	</div>
	
<div class="table-responsive mt-4 w-100">
	<table class="forums-table table bbp-forums" id="forums-list-<?php bbp_forum_id(); ?>">
		<tr>
			<?php if (bbp_is_user_home() && bbp_is_subscriptions()) : ?>
				<th class="pe-0"></th>
			<?php endif; ?>

		</tr>


		<?php// while (bbp_forums()) : bbp_the_forum(); ?>

			<?php bbp_get_template_part('loop', 'single-forum'); ?>

		<?php //endwhile; ?>
	</table>
</div>

<?php do_action('bbp_template_after_forums_loop');
