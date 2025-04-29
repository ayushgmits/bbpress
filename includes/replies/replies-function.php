<?php

    /** Reply Admin Links *********************************************************/

    /**
     * Output admin links for reply
     *
     * @since 2.0.0 bbPress (r2667)
     *
     * @param array $args See {@link bbp_get_reply_admin_link()}
     */
    function bbp_reply_admin_linkw( $args = array() ) {
        echo bbp_get_reply_admin_linkw( $args );
    }	

    /**
	 * Return admin links for reply
	 *
	 * @since 2.0.0 bbPress (r2667)
	 *
	 * @param array $args This function supports these arguments:
	 *  - id: Optional. Reply id
	 *  - before: HTML before the links. Defaults to
	 *             '<span class="bbp-admin-links">'  
	 *  - after: HTML after the links. Defaults to '</span>'
	 *  - sep: Separator. Defaults to ' | '
	 *  - links: Array of the links to display. By default, edit, trash,
	 *            spam, reply move, and topic split links are displayed
	 * @return string Reply admin links
	 */
    function bbp_get_reply_admin_linkw( $args = array() ) {
		// Parse arguments against default values
		$r = bbp_parse_args( $args, array(
			'id'     => 0,
			'before' => '<span class="bbp-admin-links">',
			'after'  => '</span>',
			'sep'    => '  ',
			'links'  => array()
		), 'get_reply_admin_links' );
	
		$r['id'] = bbp_get_reply_id( $r['id'] );
	
		// If post is a topic, return topic admin links
		if ( bbp_is_topic( $r['id'] ) ) {
			return bbp_get_topic_admin_links( $args );
		}
	
		// If post is not a reply, return
		if ( ! bbp_is_reply( $r['id'] ) ) {
			return;
		}
	
		// If topic is trashed, do not show admin links
		if ( bbp_is_topic_trash( bbp_get_reply_topic_id( $r['id'] ) ) ) {
			return;
		}
	
		// Get parent reply ID (Replying To)
		$reply_to = bbp_get_reply_to( $r['id'] );
	
		// If no links were passed, default to the standard
		if ( empty( $r['links'] ) ) {
			$r['links'] = array(
				'trash' => bbp_get_reply_trash_link( $r )
			);
	
			// Show reply button **only if this reply is NOT a reply to another reply**
			if ( empty( $reply_to ) ) {
				$r['links']['reply'] = bbp_get_reply_to_link( $r );
			}
		}
	
		// Process the admin links
		$links  = implode( $r['sep'], array_filter( $r['links'] ) );
		$retval = $r['before'] . $links . $r['after'];
	
		// Filter & return
		return apply_filters( 'bbp_get_reply_admin_links', $retval, $r, $args );
	}
	

	add_action('add_meta_boxes', 'add_week_number_meta_box');
	add_action('save_post', 'save_week_number_meta_box');
	
	function add_week_number_meta_box() {
		add_meta_box(
			'week_number_meta_box',
			'Week Number',
			'render_week_number_meta_box',
			'topic',
			'side',
			'default'
		);
	}
	
	function render_week_number_meta_box($post) {
		$week_number = get_post_meta($post->ID, '_week_number', true);
		wp_nonce_field('week_number_nonce_action', 'week_number_nonce');
		echo '<input type="text" name="week_number" value="' . esc_attr($week_number) . '" placeholder="Enter Week Number" style="width:100%;">';
	}
	
	function save_week_number_meta_box($post_id) {
		if (!isset($_POST['week_number_nonce']) || !wp_verify_nonce($_POST['week_number_nonce'], 'week_number_nonce_action')) {
			return;
		}
	
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}
	
		if (!current_user_can('edit_post', $post_id)) {
			return;
		}
	
		if (isset($_POST['week_number'])) {
			update_post_meta($post_id, '_week_number', sanitize_text_field($_POST['week_number']));
		}
	} 
		
	function display_week_number_meta() {
		global $post;
		$week_number = get_post_meta($post->ID, '_week_number', true);
		if (!empty($week_number)) {
			echo '<p class="bbp-topic-meta">Week Number: ' . esc_html($week_number) . '</p>';
		}
	}
	
	// Add search box and filter by week number
	// add_action('bbp_template_before_topics_loop', 'add_week_number_search_box');
	// add_action('bbp_no_topics', 'add_week_number_search_box'); // This ensures it shows when no results are found.

	// function add_week_number_search_box() {
	// 	$search_query = isset($_GET['week_number_search']) ? esc_attr($_GET['week_number_search']) : '';
	// 	echo '<form class="search-week" method="get" action="" style="margin-bottom: 20px; display: flex; width: 60%; margin: auto; padding-top: 40px;">';
	// 	 $icon_url = esc_url(get_stylesheet_directory_uri() . '/assets/images/Search-Icon.png');
	// 	echo '<input type="text" class="week_number_search_textarea" name="week_number_search" value="' . $search_query . '" placeholder="Search by Week Number or title" style="background-color: #ffff; background: url('. $icon_url. ') no-repeat 10px center; background-size: 18px; width: 100%; padding: 8px; padding-left: 36px; ">';
	// 	echo '<button type="submit" class="week_number_search" style="border-radius: 0px 12px 12px 0px; margin-top: 0px;">Search</button>';
	// 	echo '</form>';
	// }

add_action('pre_get_posts', 'filter_topics_by_week_number');

function filter_topics_by_week_number($query) {	

	if ( isset($_GET['week_number_search']) && ! empty($_GET['week_number_search']) ) {
		$search_value = sanitize_text_field( $_GET['week_number_search'] );
		
			// For numeric values, filter by the _week_number meta key.
			if ($query->get('post_type') === 'topic') {
				if ( is_numeric( $search_value ) ) {
				$query->set( 'meta_query', array(
					array(
						'key'     => '_week_number',
						'value'   => $search_value,
						'compare' => '='
					)
				));
				// Order by week number
				$query->set( 'orderby', 'meta_value' );
				$query->set( 'meta_key', '_week_number' );
				$query->set( 'order', 'ASC' );
			} else {
				// For non-numeric values, perform a default search (which searches title and content)
				$query->set( 's', $search_value );
			}
		} else {
			// No search term provided – clear any meta query so that all topics show.
			$query->set( 'meta_query', array() );
		}
	}
}
function my_bbp_get_reply_trash_link( $output, $r, $args ) {
    // Replace the trash text with "Delete" in the link output.
    if ( isset( $r['trash_text'] ) ) {
        $output = str_replace( $r['trash_text'], esc_html__( 'Delete', 'bbpress' ), $output );
    }

    return $output;
}
add_filter( 'bbp_get_reply_trash_link', 'my_bbp_get_reply_trash_link', 10, 3 );

