<?php
add_filter('widget_text', 'do_shortcode');
/**THERON SHORTCODES **/

/**Success Alert **/
/**USAGE: [success]Your info success message[/success]**/
function thn_scs( $atts, $content = null ) {
		return '<div class="lgn_scs">'.$content.'</div>';
}
add_shortcode( 'success', 'thn_scs' );


/**Info Alert **/
/**USAGE: [info]Your info alert message[/info]**/
function thn_info( $atts, $content = null ) {
		return '<div class="lgn_info">'.$content.'</div>';
}
add_shortcode( 'info', 'thn_info' );


/**Warning Alert **/
/**USAGE: [warning]Your warning alert message[/warning]**/
function thn_wng( $atts, $content = null ) {
		return '<div class="lgn_wng">'.$content.'</div>';
}
add_shortcode( 'warning', 'thn_wng' );



/**Error Alert **/
/**USAGE: [error]Your error alert message[/error]**/
function thn_err( $atts, $content = null ) {
		return '<div class="lgn_err">'.$content.'</div>';
}
add_shortcode( 'error', 'thn_err' );


/**Quote Shortcode **/
/**USAGE: [quote]Your Quote[/quote]**/
function thn_quote( $atts, $content = null ) {
		return '<div class="lgn_quote">'.$content.'</div>';
}
add_shortcode( 'quote', 'thn_quote' );



/**FACEBOOK LIKE BUTTON **/
/**USAGE: [fblike]**/
function thn_facelike() {
   return '<iframe src="http://www.facebook.com/plugins/like.php?href='.urlencode(get_permalink()).'&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%; height:60px"></iframe>';
}
add_shortcode('fblike', 'thn_facelike');


/**List Style 1 **/
/**USAGE: 
[list1]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list1]
**/
function thn_list1_func($atts, $content) {
	
	$return_html = '<ul class="list1">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list1', 'thn_list1_func');


/**List Style 2 **/
/**USAGE: 
[list2]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list2]
**/
function thn_list2_func($atts, $content) {
	
	$return_html = '<ul class="list2">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list2', 'thn_list2_func');


/**List Style 3 **/
/**USAGE: 
[list3]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list3]
**/
function thn_list3_func($atts, $content) {
	
	$return_html = '<ul class="list3">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list3', 'thn_list3_func');



/**List Style 4 **/
/**USAGE: 
[list4]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list4]
**/
function thn_list4_func($atts, $content) {
	
	$return_html = '<ul class="list4">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list4', 'thn_list4_func');


/**List Style 5 **/
/**USAGE: 
[list5]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list5]
**/
function thn_list5_func($atts, $content) {
	
	$return_html = '<ul class="list5">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list5', 'thn_list5_func');



/**Youtube Video Shortcode **/
/**USAGE: [youtube width="640" height="385" video_id="EhkHFenJ3rM"]
**/
function thn_youtube_func($atts) {

	//extract short code attr
	extract(shortcode_atts(array(
		'width' => 600,
		'height' => 365,
		'video_id' => '',
	), $atts));
	
	$custom_id = time().rand();
	
	$return_html = '<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/'.$video_id.'&hd=1" style="width:'.$width.'px;height:'.$height.'px"><param name="wmode" value="opaque"><param name="movie" value="http://www.youtube.com/v/'.$video_id.'&hd=1" /></object>';
	
	return $return_html;
}
add_shortcode('youtube', 'thn_youtube_func');




/**Vimeo Video Shortcode **/
/**USAGE: [vimeo width="640" height="385" video_id="11770385"]
**/
function thn_vimeo_func($atts, $content) {

	//extract short code attr
	extract(shortcode_atts(array(
		'width' => 600,
		'height' => 365,
		'video_id' => '',
	), $atts));
	
	$custom_id = time().rand();
	
	$return_html = '<object width="'.$width.'" height="'.$height.'"><param name="allowfullscreen" value="true" /><param name="wmode" value="opaque"><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'.$width.'" height="'.$height.'" wmode="transparent"></embed></object>';
	
	return $return_html;
}
add_shortcode('vimeo', 'thn_vimeo_func');


/**2 columns **/
/**USAGE: [col2]your text[/col2]
**/
function thn_col2_func( $atts, $content = null ) {
		return '<div class="col2">'.$content.'</div>';
}
add_shortcode( 'col2', 'thn_col2_func' );


/**3 columns **/
/**USAGE: [col3]your text[/col3]
**/
function thn_col3_func( $atts, $content = null ) {
		return '<div class="col3">'.$content.'</div>';
}
add_shortcode( 'col3', 'thn_col3_func' );



/**4 columns **/
/**USAGE: [col4]your text[/col4]
**/
function thn_col4_func( $atts, $content = null ) {
		return '<div class="col4">'.$content.'</div>';
}
add_shortcode( 'col4', 'thn_col4_func' );



/**Tabs **/
/**USAGE: [tabs titles="Tab One, Tab Two"][tab]your content[/tab][tab]your content[/tab][/tabs]
**/
function thn_tabs($atts, $content = null) {
	extract(shortcode_atts(array(
		"titles" => '',
	), $atts));
	$titlearr=explode(',',$titles);
	$html='<div class="tabs-container"><ul class="tabs ">';
	foreach($titlearr as $title){
		$html.='<li class="tabli"><a href="#">'.$title.'</a></li>';
	}
	$html.='</ul><div class="lgn_tab">'.do_shortcode($content).'</div></div>';
	return $html;
}
add_shortcode('tabs', 'thn_tabs');
function thn_tab($atts, $content = null) {
	return '<div>'.do_shortcode($content).'</div>';
}
add_shortcode('tab', 'thn_tab');

/**Toggles **/
/**USAGE: [toggle title="ToggleMe"]your content[/toggle]
**/
function thn_toggle($atts, $content = null) {
	extract(shortcode_atts(array(
		"title" => '',
	), $atts));
	$titlearr=explode(',',$title);
	$html='<div class="lgn_toggle"><div class="trigger_wrap">';
	foreach($titlearr as $title){
		$html.='<a class="trigger">'.$title.'</a></div>';
	}
	$html.='<div class="lgn_toggle_content">'.do_shortcode($content).'</div></div>';
	return $html;
}
add_shortcode('toggle', 'thn_toggle');



/**Custom Button Shortcode **/
/**USAGE: [button class="violet"][/button]
**/
function thn_button_func($atts, $content = null) {

	//extract short code attr
	extract(shortcode_atts(array( 'url' => 'http://www.google.com'), $atts));
	
	$return_html = '<div class="scl_button"><span><a href="'.$url.'">'.$content.'</a></span></div><div style="clear:both"></div>';
	
	return $return_html;
}

add_shortcode('button', 'thn_button_func');



/**GOOGLE AD SENSE SHORTCODE **/
/** [adsense id="3637220125174754" slot="4668915978" width="480" height="60"]
USAGE: [adsense]**/
function thn_showads($atts) {

	//extract short code attr
	extract(shortcode_atts(array('id' => '3637220125174754', 'slot' => '4668915978', 'width' => '480', 'height' => '60'), $atts));
	
    return '<script type="text/javascript"><!--
google_ad_client = "pub-'.$id.'";
google_ad_slot = "'.$slot.'";
google_ad_width = '.$width.';
google_ad_height = '.$height.';
//-->
</script><script type="text/javascript"src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
';
}

add_shortcode('adsense', 'thn_showads');





if(strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/edit.php')) {

/*TINY MCE Success Button*/
function thn_add_success_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_success_plugin');  
   add_filter('mce_buttons_3', 'thn_register_success_button');  
  }  
}  
function thn_register_success_button($buttons) {  
    array_push($buttons, "success");  
    return $buttons;  
 }  
  

function thn_add_success_plugin($plugin_array) {  
  $plugin_array['success'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_success_button');

/*TINY MCE INFO Button*/
function thn_add_info_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_info_plugin');  
   add_filter('mce_buttons_3', 'thn_register_info_button');  
  }  
}  
function thn_register_info_button($buttons) {  
    array_push($buttons, "info");  
    return $buttons;  
 }  
  

function thn_add_info_plugin($plugin_array) {  
  $plugin_array['info'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_info_button');


/*TINY MCE Warning Button*/
function thn_add_warning_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_warning_plugin');  
   add_filter('mce_buttons_3', 'thn_register_warning_button');  
  }  
}  
function thn_register_warning_button($buttons) {  
    array_push($buttons, "warning");  
    return $buttons;  
 }  
  

function thn_add_warning_plugin($plugin_array) {  
  $plugin_array['warning'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_warning_button');


/*TINY MCE Error Button*/
function thn_add_error_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_error_plugin');  
   add_filter('mce_buttons_3', 'thn_register_error_button');  
  }  
}  
function thn_register_error_button($buttons) {  
    array_push($buttons, "error");  
    return $buttons;  
 }  
function thn_add_error_plugin($plugin_array) {  
  $plugin_array['error'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_error_button');

/*TINY MCE Quote Button*/
function thn_add_quote_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_quote_plugin');  
   add_filter('mce_buttons_3', 'thn_register_quote_button');  
  }  
}  
function thn_register_quote_button($buttons) {  
    array_push($buttons, "quote");  
    return $buttons;  
 }  
function thn_add_quote_plugin($plugin_array) {  
  $plugin_array['quote'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_quote_button');


/*TINY Facebook Like Button*/
function thn_add_fblike_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_fblike_plugin');  
   add_filter('mce_buttons_3', 'thn_register_fblike_button');  
  }  
}  
function thn_register_fblike_button($buttons) {  
    array_push($buttons, "fblike");  
    return $buttons;  
 }  
function thn_add_fblike_plugin($plugin_array) {  
  $plugin_array['fblike'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_fblike_button');


/*TINY List 1 Button*/
function thn_add_list1_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list1_plugin');  
   add_filter('mce_buttons_3', 'thn_register_list1_button');  
  }  
}  
function thn_register_list1_button($buttons) {  
    array_push($buttons, "list1");  
    return $buttons;  
 }  
function thn_add_list1_plugin($plugin_array) {  
  $plugin_array['list1'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list1_button');

/*TINY List 2 Button*/
function thn_add_list2_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list2_plugin');  
   add_filter('mce_buttons_3', 'thn_register_list2_button');  
  }  
}  
function thn_register_list2_button($buttons) {  
    array_push($buttons, "list2");  
    return $buttons;  
 }  
function thn_add_list2_plugin($plugin_array) {  
  $plugin_array['list2'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list2_button');

/*TINY List 3 Button*/
function thn_add_list3_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list3_plugin');  
   add_filter('mce_buttons_3', 'thn_register_list3_button');  
  }  
}  
function thn_register_list3_button($buttons) {  
    array_push($buttons, "list3");  
    return $buttons;  
 }  
function thn_add_list3_plugin($plugin_array) {  
  $plugin_array['list3'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list3_button');

/*TINY List 4 Button*/
function thn_add_list4_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list4_plugin');  
   add_filter('mce_buttons_3', 'thn_register_list4_button');  
  }  
}  
function thn_register_list4_button($buttons) {  
    array_push($buttons, "list4");  
    return $buttons;  
 }  
function thn_add_list4_plugin($plugin_array) {  
  $plugin_array['list4'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list4_button');

/*TINY List 5 Button*/
function thn_add_list5_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list5_plugin');  
   add_filter('mce_buttons_3', 'thn_register_list5_button');  
  }  
}  
function thn_register_list5_button($buttons) {  
    array_push($buttons, "list5");  
    return $buttons;  
 }  
function thn_add_list5_plugin($plugin_array) {  
  $plugin_array['list5'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list5_button');

/*TINY youtube Button*/
function thn_add_youtube_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_youtube_plugin');  
   add_filter('mce_buttons_3', 'thn_register_youtube_button');  
  }  
}  
function thn_register_youtube_button($buttons) {  
    array_push($buttons, "youtube");  
    return $buttons;  
 }  
function thn_add_youtube_plugin($plugin_array) {  
  $plugin_array['youtube'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_youtube_button');


/*TINY Vimeo Button*/
function thn_add_vimeo_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_vimeo_plugin');  
   add_filter('mce_buttons_3', 'thn_register_vimeo_button');  
  }  
}  
function thn_register_vimeo_button($buttons) {  
    array_push($buttons, "vimeo");  
    return $buttons;  
 }  
function thn_add_vimeo_plugin($plugin_array) {  
  $plugin_array['vimeo'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_vimeo_button');


/*TINY Column2 Button*/
function thn_add_col2_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col2_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col2_button');  
  }  
}  
function thn_register_col2_button($buttons) {  
    array_push($buttons, "col2");  
    return $buttons;  
 }  
function thn_add_col2_plugin($plugin_array) {  
  $plugin_array['col2'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col2_button');

/*TINY Column3 Button*/
function thn_add_col3_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col3_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col3_button');  
  }  
}  
function thn_register_col3_button($buttons) {  
    array_push($buttons, "col3");  
    return $buttons;  
 }  
function thn_add_col3_plugin($plugin_array) {  
  $plugin_array['col3'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col3_button');

/*TINY Column4 Button*/
function thn_add_col4_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col4_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col4_button');  
  }  
}  
function thn_register_col4_button($buttons) {  
    array_push($buttons, "col4");  
    return $buttons;  
 }  
function thn_add_col4_plugin($plugin_array) {  
  $plugin_array['col4'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col4_button');


/*TINY Tabs Button*/
function thn_add_tabs_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_tabs_plugin');  
   add_filter('mce_buttons_3', 'thn_register_tabs_button');  
  }  
}  
function thn_register_tabs_button($buttons) {  
    array_push($buttons, "tabs");  
    return $buttons;  
 }  
function thn_add_tabs_plugin($plugin_array) {  
  $plugin_array['tabs'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_tabs_button');

/*TINY Toggle Button*/
function thn_add_toggle_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_toggle_plugin');  
   add_filter('mce_buttons_3', 'thn_register_toggle_button');  
  }  
}  
function thn_register_toggle_button($buttons) {  
    array_push($buttons, "toggle");  
    return $buttons;  
 }  
function thn_add_toggle_plugin($plugin_array) {  
  $plugin_array['toggle'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_toggle_button');

/*TINY buttons Button*/
function thn_add_button_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_button_plugin');  
   add_filter('mce_buttons_3', 'thn_register_button_button');  
  }  
}  
function thn_register_button_button($buttons) {  
    array_push($buttons, "button");  
    return $buttons;  
 }  
function thn_add_button_plugin($plugin_array) {  
  $plugin_array['button'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_button_button');
	

/*TINY MCE Adsense Button*/
function thn_add_adsense_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_adsense_plugin');  
   add_filter('mce_buttons_3', 'thn_register_adsense_button');  
  }  
}  
function thn_register_adsense_button($buttons) {  
    array_push($buttons, "adsense");  
    return $buttons;  
 }  
  

function thn_add_adsense_plugin($plugin_array) {  
  $plugin_array['adsense'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_adsense_button'); 	
	
}