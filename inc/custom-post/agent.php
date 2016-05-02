<?php 
function home_custom_post_agent(){
		$labels = array(
			'name' => _x( 'Agents', 'post type general name', 'home' ),
			'singular_name' => _x( 'Agent', 'post type singular name', 'home' ),
			'add_new' => _x( 'Add Agent', '', 'home' ),
			'add_new_item' => __( 'Add Agent ', 'home' ),
			'edit_item' => __( 'Edit Agent', 'home' ),
			'new_item' => __( 'New Agent', 'home' ),
			'view_item' => __( 'View Agent', 'home' ),
			'search_items' => __( 'Search Agent', 'home' ),
			'not_found' =>  __( 'No Agent Found', 'home' ),
			'not_found_in_trash' => __( 'No Agent Found in Trash', 'home'), 
			'parent_item_colon' => ''
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null, 
			'menu_icon' => 'dashicons-groups',
			'taxonomies' => array( '' ), 
			'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail', 'excerpt')
		);
		
		register_post_type( 'agent', $args );	
}
add_filter('init', 'home_custom_post_agent');

add_action('add_meta_boxes', 'agent_add_custom_fields');
add_action('save_post', 'agent_save_custom_fields');

function agent_add_custom_fields(){
	add_meta_box( 
        'agent_options',
        'Agent Details',
        'agent_inner_custom_field',
        'agent' 
    );
}

function agent_inner_custom_field($post){
	wp_nonce_field(plugin_basename(__FILE__ ),'_home');
	get_post_meta($post->ID, 'agent_link', TRUE) ? $agent_link = get_post_meta($post->ID, 'agent_link', TRUE) : $agent_link = '';
	get_post_meta($post->ID, 'agent_phone', TRUE) ? $agent_phone = get_post_meta($post->ID, 'agent_phone', TRUE) : $agent_phone = '';
	get_post_meta($post->ID, 'agent_email', TRUE) ? $agent_email = get_post_meta($post->ID, 'agent_email', TRUE) : $agent_email = '';
	get_post_meta($post->ID, 'agent_twitter', TRUE) ? $agent_twitter = get_post_meta($post->ID, 'agent_twitter', TRUE) : $agent_twitter = '';
	get_post_meta($post->ID, 'agent_facebook', TRUE) ? $agent_facebook = get_post_meta($post->ID, 'agent_facebook', TRUE) : $agent_facebook = '';
	get_post_meta($post->ID, 'agent_google_plus', TRUE) ? $agent_google_plus = get_post_meta($post->ID, 'agent_google_plus', TRUE) : $agent_google_plus = '';
	get_post_meta($post->ID, 'agent_linkedin', TRUE) ? $agent_linkedin = get_post_meta($post->ID, 'agent_linkedin', TRUE) : $agent_linkedin = '';
	get_post_meta($post->ID, 'agent_youtube', TRUE) ? $agent_youtube = get_post_meta($post->ID, 'agent_youtube', TRUE) : $agent_youtube = '';
	get_post_meta($post->ID, 'agent_rss', TRUE) ? $agent_rss = get_post_meta($post->ID, 'agent_rss', TRUE) : $agent_rss = '';
	get_post_meta($post->ID, 'agent_pinterest', TRUE) ? $agent_pinterest = get_post_meta($post->ID, 'agent_pinterest', TRUE) : $agent_pinterest = '';
	get_post_meta($post->ID, 'agent_skype', TRUE) ? $agent_skype = get_post_meta($post->ID, 'agent_skype', TRUE) : $agent_skype = '';
	?>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th><label for="agent_link">Personal blog / website:</label></th>
					<td><input type="text" id="agent_link" name="agent_link" value=" <?php echo esc_attr($agent_link); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_phone">Phone:</label></th>
					<td><input type="text" id="agent_phone" name="agent_phone" value=" <?php echo esc_attr($agent_phone); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_email">Email:</label></th>
					<td><input type="text" id="agent_email" name="agent_email" value=" <?php echo esc_attr($agent_email); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_twitter">Twitter:</label></th>
					<td><input type="text" id="agent_twitter" name="agent_twitter" value=" <?php echo esc_attr($agent_twitter); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_facebook">Facebook:</label></th>
					<td><input type="text" id="agent_facebook" name="agent_facebook" value=" <?php echo esc_attr($agent_facebook); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_google_plus">Google Plus:</label></th>
					<td><input type="text" id="agent_google_plus" name="agent_google_plus" value=" <?php echo esc_attr($agent_google_plus); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_linkedin">Linkedin:</label></th>
					<td><input type="text" id="agent_linkedin" name="agent_linkedin" value=" <?php echo esc_attr($agent_linkedin); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_youtube">Youtube:</label></th>
					<td><input type="text" id="agent_youtube" name="agent_youtube" value=" <?php echo esc_attr($agent_youtube); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_rss">RSS:</label></th>
					<td><input type="text" id="agent_rss" name="agent_rss" value=" <?php echo esc_attr($agent_rss); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_pinterest">Pinterest:</label></th>
					<td><input type="text" id="agent_pinterest" name="agent_pinterest" value=" <?php echo esc_attr($agent_pinterest); ?>" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th><label for="agent_skype">Skype:</label></th>
					<td><input type="text" id="agent_skype" name="agent_skype" value=" <?php echo esc_attr($agent_skype); ?>" class="regular-text" /></td>
				</tr>
			</tbody>
		</table>
	<?php
}

function agent_save_custom_fields($post_id){
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  return;

  	if ( !current_user_can( 'edit_post', $post_id ) )
        return;

  	$mydata = array();

  	foreach($_POST as $key => $data) {
    	if($key == '_home')
     	 continue;
	  
    	if(preg_match('/^agent/i', $key)) {
      		$mydata[$key] = $data;
	  		update_post_meta($post_id, $key, $data);
    	}
  	}  
  	return $mydata;
}
?>