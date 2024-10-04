<?php
// Add social sharing links after the title in the single post
function add_social_sharing_links($title) {

        // Get the current post URL
        $post_url = urlencode(get_permalink());
        // Get the current post title
        $post_title = urlencode(get_the_title());

        // Create the LinkedIn sharing URL
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title;
        // Create the Facebook sharing URL
        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;

        // Social sharing links
        $social_links = '<div class="social-share">';
        $social_links .= '<a href="' . $linkedin_url . ' "target="_blank" ref="nofollow" class="share-link share_link_linkedin" >Share on LinkedIn</a>';
        $social_links .= ' | '
        $social_links .= '<a href="' . $facebook_url . ' "target="_blank" ref="nofollow" class="share-link share_link_facebook" >Share on Facebook</a>';
        $social_links .= '</div>';

        // Add the social links after the title
        $title .= $social_links;

    return $title;
}

// Hook the function
add_action('single_post_title', 'add_social_sharing_links');
?>
