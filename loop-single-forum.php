<?php

/**
 * Forums Loop - Grouped by Category (Using WP_Query)
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

// Get all categories for the 'cate' taxonomy
$categories = get_terms([
	'taxonomy' => 'cate',
	'hide_empty' => false
]);

$displayed_forums = []; // Track forums across all categories

if (!empty($categories) && !is_wp_error($categories)) {
	foreach ($categories as $category) {
		// Query forums under this category
		$forums_query = new WP_Query([
			'post_type' => bbp_get_forum_post_type(),
			'tax_query' => [
				[
					'taxonomy' => 'cate',
					'field' => 'term_id',
					'terms' => $category->term_id
				]
			],
			'posts_per_page' => -1
		]);

		if ($forums_query->have_posts()) { ?>

			<div class="table-responsive mt-4 w-100">
				<table class="forums-table table bbp-forums">
					<thead>
						<tr>
							<td class="cate" colspan="5" style="background: #ffff;">
								<h3><?php echo esc_html($category->name); ?></h3>
								<?php if (!empty($category->description)) : ?>
									<span style="display: block; color: #555;"> <?php echo esc_html($category->description); ?></span>
								<?php endif; ?>
							</td>
						</tr>
					</thead>
					<tbody>

					<?php while ($forums_query->have_posts()) {
						$forums_query->the_post();
						$forum_id = get_the_ID();

						if (in_array($forum_id, $displayed_forums)) {
							continue; // Skip duplicate forums
						}

						$displayed_forums[] = $forum_id; ?>

						<tr id="bbp-forum-<?php echo esc_attr($forum_id); ?>" <?php bbp_forum_class($forum_id); ?> >
							<td>
							<div class="bbp-topic-con">
								<div class="bbp-topic-icon">
									<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/Conversation-Icon.png'); ?>" alt="Message Icon" style="">
								</div>
							<div class="bbp-topic-title-con">
								<h6>
									<a class="bbp-topic-permalink" href="<?php echo esc_url(bbp_get_forum_permalink($forum_id)); ?>">
										<?php echo esc_html(get_the_title($forum_id)); ?>
									</a>
								</h6>
								<div class="bbp-topic-meta mt-1">
									<div class="topic-meta-box d-inline-block me-4">
										<div class="icons-main-meta d-flex align-items-center">
											<span class="name">
												<?php 
												$forum_content = bbp_get_forum_content($forum_id);
												echo !empty(trim($forum_content)) ? esc_html($forum_content) : 'No description available';
												?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
							
							</td>
							<td class="count-fo">
								<span class="sv-voices"> <?php echo esc_html(bbp_get_forum_topic_count($forum_id)) . ' posts'; ?></span>
							</td>
						</tr>
					<?php } ?>

					</tbody>
				</table>
			</div>

			<?php wp_reset_postdata();
		}
	}
}
?>
