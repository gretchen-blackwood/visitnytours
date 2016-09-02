<?php
//bring in parent theme styles
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//add tripadvisor links to 'Team Member' post type
$meta_boxes['team'] =
array(
      'id' => 'team',
      'title' => 'Team Member Options',
      'pages' => array('post'), // post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(
				array(
	    			'name' => __( 'Tripadvisor URL', 'sensible' ),
	    			'desc' => __( 'Enter the Tripadvisor URL for the team member.', 'sensible' ),
	    			'id' => $prefix . 'primary_tripadvisor',
	    			'type' => 'text_url',
					),
		array(
  			'name' => __( 'Facebook URL', 'sensible' ),
  			'desc' => __( 'Enter the Facebook URL for the team member.', 'sensible' ),
  			'id' => $prefix . 'primary_facebook',
  			'type' => 'text_url',
			),
		array(
  			'name' => __( 'Twitter URL', 'sensible' ),
  			'desc' => __( 'Enter the Twitter URL for the team member.', 'sensible' ),
  			'id' => $prefix . 'primary_twitter',
  			'type' => 'text_url',
			),
		array(
  			'name' => __( 'LinkedIn URL', 'sensible' ),
  			'desc' => __( 'Enter the LinkedIn URL for the team member.', 'sensible' ),
  			'id' => $prefix . 'primary_linkedin',
  			'type' => 'text_url',
			),
		array(
  			'name' => __( 'Google Plus URL', 'sensible' ),
  			'desc' => __( 'Enter the Google Plus URL for the team member.', 'sensible' ),
  			'id' => $prefix . 'primary_google',
  			'type' => 'text_url',
			),
		array(
  			'name' => __( 'Email URL', 'sensible' ),
  			'desc' => __( 'Enter the email address for the team member.', 'sensible' ),
  			'id' => $prefix . 'primary_email',
  			'type' => 'text_email',
			),
      ),

  );

  //Initialize the update checker.
$custom_update_checker = new ThemeUpdateChecker(
    'visitnytours',
    'https://raw.githubusercontent.com/gretchen-blackwood/visitnytours/master/theme_details.json'
);
