jQuery(document).ready(function($) {
    // When the like icon is clicked
    $('.like-icon').on('click', function() {
        var likeIcon = $(this); // Cache the like icon element
        var postID = likeIcon.data('post-id');
        var likeCountElement = likeIcon.next('.like-count'); // Element to update the like count

        // Prevent multiple triggers by using 'one' to trigger the click only once for this element
        if (likeIcon.hasClass('loading')) return; // Prevent if already in progress

        // Add a loading class to indicate the process is ongoing
        likeIcon.addClass('loading');

        // Send AJAX request to like or remove like
        $.post(
            ajax_object.ajaxurl, // Use the localized ajaxurl
            {
                action: 'like_post', // The action hooked in WordPress
                post_id: postID // Post ID to be liked
            },
            function(response) {
                // Remove the loading class once the AJAX request is done
                likeIcon.removeClass('loading');

                // Update the like count and icon color immediately based on the response
                if (response == 'liked') {
                    likeIcon.addClass('liked').removeClass('default'); // Make heart red
                    likeCountElement.text(parseInt(likeCountElement.text()) + 1); // Increment like count
                } else if (response == 'disliked') {
                    likeIcon.removeClass('liked').addClass('default'); // Revert heart to default
                    likeCountElement.text(parseInt(likeCountElement.text()) - 1); // Decrement like count
                }
            }
        );
    });
});
