<?php 

if(! function_exists('roofing_dsm')){

  function roofing_dsm($var){

    print "<pre>" . print_r($var, true) . "</pre>";

  }

}



function roofing_is_blog() {

	global  $post;

	$posttype = get_post_type($post );

	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;

}

// retrieves the attachment ID from the file URL
function wd_get_image_id($roofing_image_url) {
    global $wpdb;
    $roofing_image_url   = esc_sql( $roofing_image_url );
    $roofing_attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $roofing_image_url ));
    if (isset($roofing_attachment[0])) {
    	return $roofing_attachment[0];
    }
}