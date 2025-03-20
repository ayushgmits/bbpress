<?php

/**
 * Single Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

use function SocialV\Utility\socialv;

// Exit if accessed directly
defined('ABSPATH') || exit;
?>

<div class="bbpress-wrapper">

<div class="forum-title">
	<h1 class="page-title"><?php
	if (bbp_is_topic_edit()) :
	else : (bbp_is_single_forum() && bbp_get_forum_title())
			? printf( bbp_get_forum_title())
			: esc_html_e('Create New Topic', 'socialv');
	endif;
	?>
	</h1>
		<nav class="breadcrum">
		<a href="' . home_url() . '">Home</a> >
		<span>Forum</span> > <?php printf( bbp_get_forum_title()) ?>
		</nav>
	</div>

<div class="bbpress-search-box">
    <form class="search-week" method="get" action="" style="margin-bottom: 20px; display: flex; width: 60%; margin: auto; padding-top: 40px;">
        <?php $search_query = isset($_GET['week_number_search']) ? esc_attr($_GET['week_number_search']) : ''; ?>
        <?php $icon_url = esc_url(get_stylesheet_directory_uri() . '/assets/images/Search-Icon.png'); ?>
        
        <input type="text" class="week_number_search_textarea" name="week_number_search" value="<?php echo $search_query; ?>" placeholder="Search by Week Number or title" style="background-color: #ffff; background: url(<?php echo $icon_url; ?>) no-repeat 10px center; background-size: 18px; width: 100%; padding: 8px; padding-left: 36px;">
        
        <button type="submit" class="week_number_search" style="border-radius: 0px 12px 12px 0px; margin-top: 0px;">Search</button>
    </form>
</div>

	<?php do_action('bbp_template_before_single_forum'); ?>

	<?php if (post_password_required()) : ?>

		<?php bbp_get_template_part('form', 'protected'); ?>

	<?php else : ?>

		<?php if (bbp_has_forums()) : ?>

			<?php bbp_get_template_part('loop', 'forums'); ?>

		<?php endif; ?>

		<?php if (!bbp_is_forum_category() && bbp_has_topics()) : ?>

			<?php bbp_get_template_part('pagination', 'topics'); ?>

			<?php bbp_get_template_part('loop',       'topics'); ?>

			<?php bbp_get_template_part('pagination', 'topics'); ?>

			<?php //bbp_get_template_part('form',       'topic'); ?>

		<?php elseif (!bbp_is_forum_category()) : ?>

			<?php //bbp_get_template_part('feedback',   'no-topics'); ?>

			<?php //bbp_get_template_part('form',       'topic'); ?>

		<?php endif; ?>

	<?php endif; ?>

	<?php do_action('bbp_template_after_single_forum'); ?>

</div>