<?php
/*
Plugin Name: Excerpt Old Posts
Plugin URI: http://wordpress.org/extend/plugins/excerpt-old-posts/
Description: Shows excerpted content for older posts. This allows more items in the feed while working around Feedburner's 512K feed limit.
Version: 1.0
Author: Jon Galloway
Author URI: http://weblogs.asp.net/jgalloway
License: ModifiedBSD
*/

function excerpt_old_posts ($content) {
	// Get post count
	global $wp_query;
	$postCount = $wp_query->current_post;

	if(is_feed()) {
		$value = eop_read_setting();
	
		if ($postCount > $value) {
			$content = get_the_excerpt() ;
		} else {
			$content = $content ;
		}
	}
	return $content;
}

function eop_admin_init(){
	register_setting(
		'reading',                 // settings page
		'eop_posts_to_display',    // option name
		'intval'     			   // sanitize callback
	);
	add_settings_field(
		'eop_posts_to_display',    // id
		'Full posts to display',   // setting title
		'eop_setting_input',       // display callback
		'reading',                 // settings page
		'default'                  // settings section
	);
}

function eop_read_setting() {
	$option = get_option( 'eop_posts_to_display' );
	$value = ($option) ? $option : 50; // default to 50
	return $value;
}

function eop_setting_input() {
	$value = eop_read_setting();
	?>
	
<input id='eop_posts_to_display' name='eop_posts_to_display'
 type='text' value='<?php echo esc_attr( $value ); ?>' /> Number of posts which should be displayed in full
	<?php
}

add_filter('the_content_feed', 'excerpt_old_posts');
add_action('admin_init', 'eop_admin_init');
?>