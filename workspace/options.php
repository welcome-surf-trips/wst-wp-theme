<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function theron_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	if (function_exists('wp_get_theme')){
	$themename = wp_get_theme('theme-name');
	} else {
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');	
	}
	
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$theron_settings = get_option('optionsframework');
	$theron_settings['id'] = $themename;
	update_option('optionsframework', $theron_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function theron_options() {
	
	// Test data
$number_array = array("1" => "One","2" => "Two","3" => "Three","4" => "Four","5" => "Five", "6" => "Six","7" => "Seven","8" => "Eight","9" => "Nine","10" => "Ten");
$numberfront_array = array("1" => "One","2" => "Two","3" => "Three","4" => "Four","5" => "Five", "6" => "Six","7" => "Seven","8" => "Eight","9" => "Nine","10" => "Ten","11" => "Eleven", "12" => "Twelve");

	// Fonts Array	
	$fonts_array = array(
	"yanone_kaffeesatz" => "Yanone Kaffeesatz",
	"exo" => "Exo",
	"lobster" => "Lobster",
	"glegoo" => "Glegoo",
	"kaushan_script" => "Kaushan Script", 
	"norican" => "Norican",
	"overclocksc" => "Overclock SC",
	"poiret_one" => "PoiretOne",
	"share" => "Share",
	"squad_one" => "Squad One", 
	"pacifico" => "Pacifico",	
	"voces" => "Voces",
	"yesteryear" => "Yesteryear", 
	"dropio_one" => "Dropio One",
	"francois_one" => "Francois One"	
	);
	
	// Test data
	$slider_array = array("newsslider" => "News slider","nivo" => "Nivo Slider","accordion" => "Accordion","noslider" => "No Slider");
	
	// Header TYPE
	$header_array = array("header1" => "Header Type 1","header2" => "Header Type 2","header3" => "Header Type 3","header4" => "Header Type 4");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Editor Defaults
		$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'media_buttons' => 'true',
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
		
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/admin/images/';
		
	$options = array();
		
	$options[] = array( "name" => __('Basic', 'theron'),
						"type" => "heading");
						
	$options[] = array( "name" => __('Select Font', 'theron'),
						"desc" => "",
						"id" => "font_select",
						"std" => "yanone_kaffeesatz",
						"type" => "select",
						"class" => "mini",
						"options" => $fonts_array);
						
	$options[] = array( "name" => __('Use My own Font', 'theron'),
						"desc" => "Use a font from Google WebFont (http://www.google.com/webfonts)",
						"id" => "gglfont_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Name of Google Font', 'theron'),
						"desc" => "put the name of the google font here",
						"id" => "gglfont_text",
						"std" => "",
						"type" => "text",
						"class" => "mini"
						);
						
						
		
	$options[] = array( "name" => __('Header Type', 'theron'),
						"desc" => "",
						"id" => "head_select",
						"std" => "header1",
						"type" => "select",
						"class" => "mini",
						"options" => $header_array);					
						
	$options[] = array( "name" => __('Sticky Menu', 'theron'),
						"desc" => "Enable Sticky menu.",
						"id" => "stickm_checkbox",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Upload Logo/Header', 'theron'),
						"desc" => "Upload your logo or header image. click the 'Upload' button to begin.",
						"id" => "logo_uploader",
						"type" => "upload");
						
	$options[] = array( "name" => __('Rounded', 'theron'),
						"desc" => "Enable Rounded corner",
						"id" => "rounded_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Remove Right Sidebar', 'theron'),
						"desc" => "Remove Right sidebar from all the pages and make the site full width.",
						"id" => "nosidebar_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Footer Content', 'theron'),
						"desc" => "Footer Text.",
						"id" => "footer_textarea",
						"std" => "",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
							

	$options[] = array( "name" => __('Front Page', 'theron'),
						"type" => "heading");
						
	$options[] = array( "name" => __('Front Page Layout', 'theron'),
						"desc" => "select a front page layout",
						"id" => "layout_images",
						"std" => "layout1",
						"type" => "images",
						"options" => array(
							'layout1' => $imagepath . 'layout1.png',
							'layout2' => $imagepath . 'layout2.png',
							'layout3' => $imagepath . 'layout3.png',
							'layout4' => $imagepath . 'layout4.png',
							'layout5' => $imagepath . 'layout5.png'
							)
						);
						
	$options[] = array( "name" => __('Welcome Text', 'theron'),
						"desc" => "",
						"id" => "wlcm_textarea",
						"std" => "Your Welcome text goes here...",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
						
	$options[] = array( "name" => __('Enable Latest Posts', 'theron'),
						"desc" => "Enable the posts under the blocks on homepage",
						"id" => "latstpst_checkbox",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Show Posts from a certain Category', 'theron'),
						"desc" => "Show posts from certain category on frontpage. Select the category below.",
						"id" => "frontcat_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Front Page Posts Category",
						"desc" => "Select a Category For Front Page.",
						"id" => "front_cat",
						"type" => "select",
						"class" => "mini",
						"options" => $options_categories);						
						
	$options[] = array( "name" => __('Number of Front page Posts', 'theron'),
						"desc" => "",
						"id" => "frontnum_select",
						"std" => "4",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $numberfront_array);
						
												
												
	$options[] = array( "name" => __('Enable Blocks', 'theron'),
						"desc" => "Enable the homepage blocks.",
						"id" => "blocks_checkbox",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Block 1 Heading', 'theron'),
						"desc" => "",
						"id" => "block1_text",
						"std" => "We Work Efficiently",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 1 Text', 'theron'),
						"desc" => "",
						"id" => "block1_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
						
	$options[] = array( "name" => __('Block 1 Link', 'theron'),
						"desc" => "",
						"id" => "block1_link",
						"std" => "http://wordpress.org/",
						"type" => "text");
						
	$options[] = array( "name" => __('Block 2 Heading', 'theron'),
						"desc" => "",
						"id" => "block2_text",
						"std" => "24/7 Live Support",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 2 Text', 'theron'),
						"desc" => "",
						"id" => "block2_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac. Sed ultrices leo.",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
						
	$options[] = array( "name" => __('Block 2 Link', 'theron'),
						"desc" => "",
						"id" => "block2_link",
						"std" => "",
						"type" => "text");

	$options[] = array( "name" => __('Block 3 Heading', 'theron'),
						"desc" => "",
						"id" => "block3_text",
						"std" => "Confide",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 3 Text', 'theron'),
						"desc" => "",
						"id" => "block3_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac. ",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
						
	$options[] = array( "name" => __('Block 3 Link', 'theron'),
						"desc" => "",
						"id" => "block3_link",
						"std" => "",
						"type" => "text");

	$options[] = array( "name" => __('Block 4 Heading', 'theron'),
						"desc" => "",
						"id" => "block4_text",
						"std" => "Gurantee Like No Other",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 4 Text', 'theron'),
						"desc" => "",
						"id" => "block4_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum.",
						"type" => "editor",
						'settings' => $wp_editor_settings); 
						
	$options[] = array( "name" => __('Block 4 Link', 'theron'),
						"desc" => "",
						"id" => "block4_link",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Facebook', 'theron'),
						"desc" => "Your Facebook url",
						"id" => "fbsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Twitter', 'theron'),
						"desc" => "Your Twitter url",
						"id" => "ttsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Google Plus', 'theron'),
						"desc" => "Your Google Plus url",
						"id" => "gpsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Youtube', 'theron'),
						"desc" => "Your Youtube url",
						"id" => "ytbsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Flickr', 'theron'),
						"desc" => "Your Flickr url",
						"id" => "flkrsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Linkedin', 'theron'),
						"desc" => "Your Linkedin url",
						"id" => "lnkdsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Pinterest', 'theron'),
						"desc" => "Your Pinterest url",
						"id" => "pinsoc_text",
						"std" => "",
						"type" => "text");
						

	$options[] = array( "name" => __('Tumblr', 'theron'),
						"desc" => "Your Tumblr url",
						"id" => "tmblrsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Instagram', 'theron'),
						"desc" => "Your Instagram url",
						"id" => "instasoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Vimeo', 'theron'),
						"desc" => "Your Vimeo url",
						"id" => "vimsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Rss', 'theron'),
						"desc" => "Your RSS url",
						"id" => "rsssoc_text",
						"std" => "",
						"type" => "text");
						

	$options[] = array( "name" => __('Style', 'theron'),
						"type" => "heading");	
						
						
	$options[] = array( "name" => __('Primary Element Color', 'theron'),
						"desc" => "Select Primary Element Color",
						"id" => "prmelm_colorpicker",
						"std" => "#ffffff",
						"type" => "color");
						
						
	$options[] = array( "name" => __('Primary Element Border Color', 'theron'),
						"desc" => "Select Primary Elemen't Border Color(choose a deeper colorline of the 'Prmary Element color.')",
						"id" => "prmelmbrd_colorpicker",
						"std" => "#f5f5f5",
						"type" => "color");
						
	$options[] = array( "name" => __('Secondary Element Color', 'theron'),
						"desc" => "Select Secondary Element Color",
						"id" => "secelm_colorpicker",
						"std" => "#2bb975",
						"type" => "color");
						
	$options[] = array( "name" => __('Text Color on Secondary Element', 'theron'),
						"desc" => "select a text color for the texts inside secondary elemnts",
						"id" => "secelmtxt_colorpicker",
						"std" => "#ffffff",
						"type" => "color");
						
	$options[] = array( "name" => __('Tertiary Element Color', 'theron'),
						"desc" => "Select header/foooter Color",
						"id" => "tertelm_colorpicker",
						"std" => "#302f2f",
						"type" => "color");
						
	$options[] = array( "name" => __('Logo Color', 'theron'),
						"desc" => "Select a color of the text logo",
						"id" => "logcol_colorpicker",
						"std" => "#ffffff",
						"type" => "color");
						
	$options[] = array( "name" => __('Menu Font Color', 'theron'),
						"desc" => "Select a color of the text logo",
						"id" => "menucol_colorpicker",
						"std" => "#ffffff",
						"type" => "color");
						
	$options[] = array( "name" => __('Post Title Color', 'theron'),
						"desc" => "Select a post title color",
						"id" => "posttt_colorpicker",
						"std" => "#333333",
						"type" => "color");
						
	$options[] = array( "name" => __('Other Headings Color', 'theron'),
						"desc" => "Select widget title color",
						"id" => "othhdngs_colorpicker",
						"std" => "#333333",
						"type" => "color");
						
	$options[] = array( "name" => __('Content Font Color', 'theron'),
						"desc" => "Select font color of site's content",
						"id" => "context_colorpicker",
						"std" => "#888888",
						"type" => "color");	
						
	$options[] = array( "name" => __('Link Color', 'theron'),
						"desc" => "Select link color",
						"id" => "link_colorpicker",
						"std" => "#2bb975",
						"type" => "color");	
						
						
	$options[] = array( "name" => __('Disable Pattern images', 'theron'),
						"desc" => "disable all the pattern images from the header/footer elements.",
						"id" => "pattrndiss_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Shadow intensity', 'theron'),
						"desc" => "shadow intensity of primary elements(0.1-1.0)",
						"id" => "shdow_text",
						"std" => "0.1",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" => __('Use Custom Font Size', 'theron'),
						"desc" => "Use font size You set below",
						"id" => "fontszlet_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Logo Font Size', 'theron'),
						"desc" => "logo font size in px",
						"id" => "logosz_text",
						"std" => "40px",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" => __('Menu Font Size', 'theron'),
						"desc" => "Menu font size in px",
						"id" => "mnusz_text",
						"std" => "18px",
						"class" => "mini",
						"type" => "text");	
											
	$options[] = array( "name" => __('Post Title Font Size', 'theron'),
						"desc" => "Post title font size in px",
						"id" => "postsz_text",
						"std" => "24px",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" => __('Other Headings', 'theron'),
						"desc" => "Other headings font size in px",
						"id" => "othdngsz_text",
						"std" => "24px",
						"class" => "mini",
						"type" => "text");
						
													
						
	$options[] = array( "name" => __('Slider', 'theron'),
						"type" => "heading");
						
	$options[] = array( "name" => __('Select Slider', 'theron'),
						"desc" => "",
						"id" => "slider_select",
						"std" => "nivo",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $slider_array);
						
						
	$options[] = array( "name" => __('Slider Speed', 'theron'),
						"desc" => "milliseconds",
						"id" => "sliderspeed_text",
						"std" => "3000",
						"class" => "mini",
						"type" => "text");	
						
	$options[] = array( "name" => __('Number of Slides', 'theron'),
						"desc" => "",
						"id" => "number_select",
						"std" => "5",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $number_array);
						
						
	$options[] = array( "name" => __('Slider Content', 'theron'),
						"desc" => "Show Slider text",
						"id" => "sldrtxt_checkbox",
						"std" => "1",
						"type" => "checkbox");	
						
	$options[] = array( "name" => __('Disable Nivo Slider thumbnails', 'theron'),
						"desc" => "Disable Nivo Slider thumbnails and display arrows",
						"id" => "nivothumb_checkbox",
						"std" => "0",
						"type" => "checkbox");				
						

	$options[] = array( "name" => __('Miscelleneous', 'theron'),
						"type" => "heading");
						
	$options[] = array( "name" => __('Post Sharing', 'theron'),
						"desc" => "Disable Share buttons under posts",
						"id" => "dissshare_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Related Posts', 'theron'),
						"desc" => "Disable Related Posts",
						"id" => "dissrltd_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Post Author Name', 'theron'),
						"desc" => "Hide Post Author Name",
						"id" => "dissauth_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Category & Tags', 'theron'),
						"desc" => "Hide Post Categories and Tags",
						"id" => "disscats_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Lightbox', 'theron'),
						"desc" => "Disable Fancybox Lightbox",
						"id" => "disslight_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Blog Page Category",
						"desc" => "Select a Category For Blog Page Template",
						"id" => "blog_cat",
						"type" => "select",
						"class" => "mini",
						"options" => $options_categories);
						
						
	$options[] = array( "name" => __('Contact Page Email', 'theron'),
						"desc" => "If you have setup the contact page, the sent messages will arrive to this email address.",
						"id" => "email_text",
						"std" => get_option('admin_email'),
						"class" => "mini",
						"type" => "text");	
						
						
	$options[] = array( "name" => __('Google Analytics', 'zenon'),
						"desc" => "Your google Analytics ID, Example: UA-16025133-2",
						"id" => "ganlytcs_text",
						"std" => "",
						"class" => "mini", //mini, tiny, small
						"type" => "text"); 
						
						
	$options[] = array( "name" => __('Icons', 'theron'),
						"desc" => "change the icon color to make them visible on your content background",
						"id" => "icons_images",
						"std" => "icons1",
						"type" => "images",
						"options" => array(
							'icons1' => $imagepath . 'icons1.png',
							'icons2' => $imagepath . 'icons2.png',
							'icons3' => $imagepath . 'icons3.png',
							)
						);
						
						
	$options[] = array( "name" => __('Documentation', 'theron'),
						"type" => "heading");
						
	$options[] = array( "name" => __('About', 'theron'),
						"type" => "heading");	

													
	return $options;
}