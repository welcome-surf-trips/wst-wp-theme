<?php	
add_theme_support( 'custom-background', array(
	'default-color' => '',
	'default-image' => get_template_directory_uri() . '/images/theronbg.png'
) );

	add_theme_support('automatic-feed-links');
	if ( ! isset( $content_width ) )
	$content_width = 630;

//Post Thumbnail	

   add_theme_support( 'post-thumbnails' );

//Register Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'theron' ),
		'footer' => __( 'Footer Navigation', 'theron' )
	) );
	
	


function thn_ie_css() { 
if ( !is_admin() ) {
    wp_register_style( 'thn_ie', get_template_directory_uri().'/css/ie.css', false, 1.5 );
    $GLOBALS['wp_styles']->add_data( 'thn_ie', 'conditional', 'IE 8' );
    wp_enqueue_style( 'thn_ie' );
	}
}
add_action('wp_enqueue_scripts', 'thn_ie_css');	

function thn_other_css() { 
if ( !is_admin() ) {
if(of_get_option('disslight_checkbox') == "0"){ ?><?php wp_enqueue_style('fancybox',get_template_directory_uri().'/css/fancybox.css'); }
if(of_get_option('gglfont_checkbox') == "0"){ ?><?php wp_enqueue_style('customfont',get_template_directory_uri().'/fonts/'.$zn_fonts = of_get_option('font_select', 'yanone_kaffeesatz' ).'.css'); }
	}
}
add_action('wp_enqueue_scripts', 'thn_other_css');	

function thn_enqueue_google_font($font) {

        $font = of_get_option('gglfont_text');
    $font = str_replace(" ", "+", $font);
if(of_get_option('gglfont_checkbox') == "1"){ ?><?php wp_enqueue_style( "thn_google_$font", "http://fonts.googleapis.com/css?family=$font", false, null, 'all' );}

}
add_action( 'wp_enqueue_scripts', 'thn_enqueue_google_font' );

//Include CSS
function thn_customstyle() { ?>

<?php if(of_get_option('sldrtxt_checkbox') == "0"){ ?> <style type="text/css">body .nivo-caption{ display:none!important;}</style><?php } ?>
<?php /*?>Custom GOOGLE FONT */?>
<?php if(of_get_option('gglfont_checkbox') == "1"){ ?>
<style type="text/css">
.lay1 .block_comm a, .lay2 .block_comm a, .lay3 .block_comm a{ float: left;line-height: 9px;margin-left: -3px;padding-top: 9px;text-align: center; font-family: '<?php echo of_get_option('gglfont_text');?>'; letter-spacing: 0.05em; font-weight: normal!important;}
.lay1 .block_comm span, .lay2 .block_comm span, .lay3 .block_comm span{ float: left;line-height: 9px;margin-left: 3px;padding-top: 14px;text-align: center; font-family: '<?php echo of_get_option('gglfont_text');?>'; letter-spacing: 0.05em; font-weight: normal!important;}
h1, h2, h3, h4, h5, h6, .trt_button a, #submit_msg, #submit_msg, #submit, .fourofour a, .trt_wgt_tt, #related ul li a, .logo h1 a, #slider .slider-content h2 a, .lay1 .post .postitle a, .lay1 .page .postitle a, #topmenu ul li a{ font-family: '<?php echo of_get_option('gglfont_text');?>'; letter-spacing: 0.05em; font-weight: normal!important;}

.postitle a{font-size:20px;}	
.single_page_post .postitle a{ font-size:24px;}
#related .post_title, #submit_msg, #submit{font-family: '<?php echo of_get_option('gglfont_text');?>'!important;font-size:16px!important;}
#topmenu ul li a{font-size:18px!important;}

#sidebar .widgets .widget ul li .znn_wgt_tt, #midrow .widgets .widget ul li .znn_wgt_tt, #footer .widgets .widget ul li .znn_wgt_tt{ font-family: '<?php echo of_get_option('gglfont_text');?>'; letter-spacing: 0.05em; font-weight: normal!important; font-size:15px;}

.lay1 .post_content h2 a, .lay2 .post_content h2 a{ font-size:16px!important;}
#topmenu ul li ul li a{ font-size:14px!important;}
#thn_welcom{font-family: '<?php echo of_get_option('gglfont_text');?>'!important;}
#footer .widgets .widget ul li .thn_wgt_tt, #sidebar .widgets .widget li a, .commentlist .commentmetadata, .commentlist .commentmetadata a, #newslider_home ul#tabs_home li a h4{font-family: '<?php echo of_get_option('gglfont_text');?>'!important; font-size:16px;}
</style>
<?php } ?>

<?php /*?>ROUNDED CORNER<?php */?>
<?php if(of_get_option('rounded_checkbox') == "1"){ ?>    
<style type="text/css">

<?php if(of_get_option('slider_select') == "noslider"){ ?>
body .header2 #menu_wrap{border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}
body .header1 #menu_wrap, body .header1 #header{border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}
.slide_shadow{ display:none;}
<?php } ?>

.home #topmenu, #header, .lay1 .post .imgwrap, .header2 #menu_wrap, .logo{border-radius: 8px 8px 0 0; -moz-border-radius: 8px 8px 0 0; -webkit-border-radius: 8px 8px 0 0;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}

.single-post #menu_wrap, .page #menu_wrap{border-radius: 0 0 8px 8px; -moz-border-radius: 0 0 8px 8px; -webkit-border-radius: 0 0 8px 8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}

.single-post .header3 #menu_wrap, .page .header3 #menu_wrap{ border-radius: 0px; -moz-border-radius: 0px; -webkit-border-radius: 0px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}

#zn_slider, #topmenu ul li ul{border-radius: 0 0 8px 8px; -moz-border-radius: 0 0 8px 8px; -webkit-border-radius: 0 0 8px 8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}
#topmenu, .midrow_blocks, #footer, #copyright, .lay1 .hentry, .single_post, #sidebar .widgets .widget, #commentform, .comment-form-comment textarea, .form-submit input, #searchsubmit, #related_wrap ul, .znn_paginate span, .znn_paginate a, .navigation a, .navigation span, .lay2, .lay3 .post_image, .lay3 .post_content, .comment-form-author input, .comment-form-email input, .comment-form-url input, #thn_welcom, .thn_paginate span, .thn_paginate a, .navigation a, .navigation span, .single-post #header, .page #header, #newslider_home .news_buttn, .single-post .header2 #menu_wrap, .page .header2 #menu_wrap, .lay2 .hentry, .lay4 .hentry, .lay3 .hentry, #newslider, .comments_template{border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}
#commentform label{border-radius: 8px 0 0 8px; -moz-border-radius: 8px 0 0 8px; -webkit-border-radius: 8px 0 0 8px;behavior: url(<?php echo get_template_directory_uri(); ?>/images/PIE.htc);}
#copyright{ margin-top:20px;}
</style>
<?php } ?>


<?php /*?>ICON TPPE 1<?php */?>
<?php if(of_get_option('icons_images') == "icons1"){ ?>
<style type="text/css">
.comm_date{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px 3px;}
.meta_auth{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px -10px;}
.catag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -37px;}
.tag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -25px;}
.post-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -49px;}
.comment-reply-link{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -63px;}
.comment-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -49px; }
#sidebar .widget_archive li, #sidebar .widget_meta li, #sidebar .widget_recent_entries li, #sidebar .widget_nav_menu li, #sidebar .widget_recent_comments li, #sidebar .widget_pages li, #sidebar .widget_links li, #sidebar .widget_categories li{list-style-image:url(<?php echo get_template_directory_uri(); ?>/images/list_type.png);}
</style>
<?php } ?>

<?php /*?>ICON TPPE 2<?php */?>
<?php if(of_get_option('icons_images') == "icons2"){ ?>
<style type="text/css">
body .comm_date{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px -84px;}
body .meta_auth{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px -98px;}
body .tag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -111px;}
body .catag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -123px;}
body .post-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -135px;}
body .comment-reply-link{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -146px;}
body .comment-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -135px; }
#sidebar .widget_archive li, #sidebar .widget_meta li, #sidebar .widget_recent_entries li, #sidebar .widget_nav_menu li, #sidebar .widget_recent_comments li, #sidebar .widget_pages li, #sidebar .widget_links li, #sidebar .widget_categories li{list-style-image:url(<?php echo get_template_directory_uri(); ?>/images/list_type2.png);}
</style>
<?php } ?>

<?php /*?>ICON TPPE 3<?php */?>
<?php if(of_get_option('icons_images') == "icons3"){ ?>
<style type="text/css">
body .comm_date{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px -169px;}
body .meta_auth{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat;background-position: 0px -182px;}
body .tag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -195px;}
body .catag_list a{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -208px;}
body .post-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position: 0px -220px;}
body .comment-reply-link{ background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -234px;}
body .comment-edit-link{background:url(<?php echo get_template_directory_uri(); ?>/images/icons.png) no-repeat; background-position:0px -219px; }
#sidebar .widget_archive li, #sidebar .widget_meta li, #sidebar .widget_recent_entries li, #sidebar .widget_nav_menu li, #sidebar .widget_recent_comments li, #sidebar .widget_pages li, #sidebar .widget_links li, #sidebar .widget_categories li{list-style-image:url(<?php echo get_template_directory_uri(); ?>/images/list_type3.png);}
</style>
<?php } ?>
<?php /*?>BOX SHADOW<?php */?>
<style type="text/css">
.header1 .logo, #thn_welcom, .midrow_blocks, .lay1 .hentry, .lay2 .hentry, .lay3 .hentry, .lay4 .hentry, #footer, .single_wrap .single_post, #newslider, #sidebar .widgets .widget, .comments_template, .search_term{box-shadow:0px 0px 2px rgba(0, 0, 0, <?php echo of_get_option('shdow_text', '0.1'); ?>);-moz-box-shadow:0px 0px 2px rgba(0, 0, 0, <?php echo of_get_option('shdow_text', '0.1'); ?>); -webkit-box-shadow:0px 0px 2px rgba(0, 0, 0, <?php echo of_get_option('shdow_text', '0.1'); ?>);}
</style>


<?php /*?>Custom FONT Size */?>
<?php if(of_get_option('fontszlet_checkbox') == "1"){ ?>
<style type="text/css">
body .logo h1 a{ font-size:<?php echo of_get_option('logosz_text'); ?>!important; font-weight:normal!important;}
body #topmenu ul li a{ font-size:<?php echo of_get_option('mnusz_text'); ?>!important;}
body .post_content h2 a, .midrow_block h3, .single_wrap .postitle a{ font-size:<?php echo of_get_option('postsz_text'); ?>!important;}
#sidebar .widgettitle, #sidebar .widgettitle a, #footer .widgets .widgettitle, #footer .widgets .widgettitle a, .commentlist .commentmetadata, .commentlist .commentmetadata a, #newslider_home ul#tabs_home li a h4, ul#tabs li a, .comments_template #comments, #comments_ping{font-size:<?php echo of_get_option('othdngsz_text'); ?>!important;}
</style>
<?php } ?>

<?php if(of_get_option('nivothumb_checkbox') == "0"){ ?> 
<style type="text/css">
.nivo-controlNav{ display:none;}
</style>
<?php } ?>

<?php }

add_action( 'wp_head', 'thn_customstyle' );



//Load Java Scripts to header
function thn_head_js() { 
if ( !is_admin() ) {
wp_enqueue_script('jquery');
wp_enqueue_script('thn_js',get_template_directory_uri().'/theron.js');
wp_enqueue_script('thn_other',get_template_directory_uri().'/js/other.js');
wp_enqueue_script('thn_newsslider',get_template_directory_uri().'/js/featureList.js');
if(of_get_option('slider_select') == "accordion"){ wp_enqueue_script('thn_accordion',get_template_directory_uri().'/js/accordion.js');}
if(of_get_option('slider_select') == "nivo"){ wp_enqueue_script('thn_nivo',get_template_directory_uri().'/js/jquery.nivo.js');}
if(of_get_option('disslight_checkbox') == "0"){ wp_enqueue_script('thn_fancybox',get_template_directory_uri().'/js/fancybox.js'); }

}
}
add_action('wp_enqueue_scripts', 'thn_head_js');

//Load Java Scripts to Footer
add_action('wp_footer', 'thn_load_js');

function thn_load_js() { ?>

<?php if(of_get_option('slider_select') == "newsslider"){ ?>
        <script type="text/javascript">
				/* <![CDATA[ */
    jQuery(document).ready(function() {	
	jQuery('#tabs_home li a').featureList({
		output			:	'#output_home li',
		start_item		:	1,
		transition_interval: <?php echo of_get_option('sliderspeed_text'); ?>,
		pause_on_hover : true
		});

		jQuery(function(){
			jQuery('#tabs_home').totemticker({
				row_height	:	'102px',
				next		:	'#ticker-next',
				previous	:	'#ticker-previous',
				stop		:	'#stop',
				start		:	'#start',
				mousestop	:	true,
				interval	:	<?php echo of_get_option('sliderspeed_text'); ?>
			});
		});
	});
		/* ]]> */
    </script>
<?php } ?>
 <?php if(of_get_option('slider_select') == "accordion"){ ?>
     <script type="text/javascript">
	/* <![CDATA[ */
		jQuery().ready(function() {
			
			if (jQuery(window).width() > 500) {
			jQuery('.kwicks').kwicks({maxSize : '70%', behavior: 'menu', spacing: 0});
			} else {
			jQuery(".kwicks .dlthref").attr("href", "#");
			var index = jQuery('.kwicks').kwicks({maxSize : '70%', spacing: 0, behavior: 'slideshow'});
			jQuery('.kwicks').kwicks('select', 1);	
			}	
			
		});
	/* ]]> */
	</script>
<?php } ?>
<?php if(of_get_option('slider_select') == "nivo"){ ?>
<script type="text/javascript">
    jQuery(window).load(function() {
		
		 if(jQuery.support.touch){
			 jQuery('#zn_nivo').nivoSlider({
                        effect: 'slideInLeft',
                        animSpeed: 250, // Slide transition speed
                        pauseTime: <?php echo of_get_option('sliderspeed_text'); ?> // How long each slide will show
                    });
 
                    jQuery('a.nivo-nextNav').css('visibility', 'hidden');
                    jQuery('a.nivo-prevNav').css('visibility', 'hidden');
 
                    //Then Finish Up swipeleft and swiperight
                    jQuery('#zn_nivo').bind( 'swipeleft', function( e ) {
                        jQuery('#zn_nivo img').attr("data-transition","slideInLeft");
                        jQuery('a.nivo-nextNav').trigger('click');
                        e.stopImmediatePropagation();
                        return false; }     
                    );  
 
                    jQuery('#zn_nivo').bind( 'swiperight', function( e ) {
                        jQuery('#zn_nivo img').attr("data-transition","slideInRight");
                        jQuery('a.nivo-prevNav').trigger('click');
                        e.stopImmediatePropagation();
                        return false; } 
 
                    ); 
 
			 } else { 
			 
        jQuery('#zn_nivo').nivoSlider({effect: 'random', pauseTime: <?php echo of_get_option('sliderspeed_text'); ?>, controlNavThumbs: true,<?php if(of_get_option('nivothumb_checkbox') == "1"){ ?> directionNav: false,<?php } ?> controlNavThumbsReplace: '-150x150.jpg', pauseOnHover: true});}
    });
    </script>
<?php } ?>   
 <?php if(of_get_option('stickm_checkbox') == "1"){ ?>   
    <script type="text/javascript"> 
	/* <![CDATA[ */   
    //Sticky MENU
	jQuery(window).load(function($) {
	if (jQuery(window).width() > 500) {
	if (jQuery("body").hasClass('logged-in')) {
			jQuery("#menu_wrap").sticky({topSpacing:27});
		}
		else {
			jQuery("#menu_wrap").sticky({topSpacing:0});
	}
	jQuery("#menu_wrap").css({"z-index":"11"});
	}
	});
	/* ]]> */
	</script>
<?php } ?>
<?php if(of_get_option('dissrltd_checkbox') == "0"){ ?>    
    <script type="text/javascript">
	/* <![CDATA[ */
    jQuery(document).ready(function() {
	jQuery('#tabs li:eq(3), #tabs li:eq(4), #tabs li:eq(5), #tabs li:eq(6)').remove();	
	var n = jQuery("#tabs li").length;
	if (n > 1) {
	jQuery('#tabs li a').featureList({
		output			:	'#output li',
		start_item		:	1,
		transition_interval: 3000,
		pause_on_hover : true
		});
}
	});
	/* ]]> */
    </script>
    
<?php } ?>

     <script type="text/javascript">
	/* <![CDATA[ */
		jQuery().ready(function() {

	jQuery('#topmenu').prepend('<div id="menu-icon"><?php _e('Menu', 'theron') ?></div>');
	jQuery("#menu-icon").on("click", function(){
		jQuery("#topmenu ul.menu, #topmenu div.menu ul").slideToggle();
		jQuery(this).toggleClass("menu_active");
	});

		});
	/* ]]> */
	</script>

    <?php } 

//theron get the first image of the post Function
function thn_get_images($overrides = '', $exclude_thumbnail = false)
{
    return get_posts(wp_parse_args($overrides, array(
        'numberposts' => -1,
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'order' => 'ASC',
        'exclude' => $exclude_thumbnail ? array(get_post_thumbnail_id()) : array(),
        'orderby' => 'menu_order ID'
    )));
}

//VIDEO THUMBNAIL
function thn_get_custom_field_value($szKey, $bPrint = false) {
	global $post;
	$szValue = get_post_meta($post->ID, $szKey, true);
	if ( $bPrint == false ) return $szValue; else echo $szValue;
}

add_action('publish_page', 'add_custom_field_automatically');
add_action('publish_post', 'add_custom_field_automatically');
function add_custom_field_automatically($post_ID) {
	global $wpdb;
	if(!wp_is_post_revision($post_ID)) {
		add_post_meta($post_ID, 'videolink', '', true);
	}
}



// Change what's hidden by default
add_filter('default_hidden_meta_boxes', 'thn_hidden_meta_boxes', 10, 2);
function thn_hidden_meta_boxes($hidden, $screen) {
	if ( 'post' == $screen->base || 'page' == $screen->base || 'slider' == $screen->base  )
		$hidden = array('slugdiv', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv');
		// removed 'postcustom',
	return $hidden;
}

//ADD FULL WIDTH BODY CLASS
add_filter( 'body_class', 'thn_fullwdth_body_class');
function thn_fullwdth_body_class( $classes ) {
     if(of_get_option('nosidebar_checkbox') == "1")
          $classes[] = 'thn_fullwdth_body';
     return $classes;
}

//Custom Excerpt Length
function thn_excerptlength_teaser($length) {
    return 30;
}
function thn_excerptlength_index($length) {
    return 12;
}
function thn_excerptmore($more) {
    return '...';
}

function thn_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

//SIDEBAR
function thn_widgets_init(){
	register_sidebar(array(
	'name'          => __('Right Sidebar', 'theron'),
	'id'            => 'sidebar',
	'description'   => __('Right Sidebar', 'theron'),
	'before_widget' => '<li id="%1$s" class="widget %2$s"><div class="widget_wrap">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
	'name'          => __('Footer Widgets', 'theron'),
	'id'            => 'foot_sidebar',
	'description'   => __('Widget Area for the Footer', 'theron'),
	'before_widget' => '<li id="%1$s" class="widget %2$s"><div class="widget_wrap">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));
}

add_action( 'widgets_init', 'thn_widgets_init' );


//theron COMMENTS
function thn_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

     <div id="comment-<?php comment_ID(); ?>" class="comment-body">
      <div class="comment-author vcard">
      <div class="avatar"><?php echo get_avatar($comment,$size='50' ); ?></div>
      </div>
      <div class="comment-meta commentmetadata">
      <?php printf(__('%s', 'theron'), get_comment_author_link()) ?> <span><?php _e('says:', 'theron') ?></span>
        </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.', 'theron') ?></em>
         <br />
      <?php endif; ?>

      <div class="org_comment"><?php comment_text() ?>
      	
      	<div class="comm_meta_reply">
        <a class="comm_date"><?php printf(get_comment_date()) ?></a>
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        <?php edit_comment_link(__('Edit', 'theron'),'  ','') ?></div>
     </div>
     
     </div>
<?php
        }
		
//theron TRACKBACKS & PINGS
function thn_ping($comment, $args, $depth) {
 
$GLOBALS['comment'] = $comment; ?>
	
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   
     <div id="comment-<?php comment_ID(); ?>" class="comment-body">
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.', 'theron') ?></em>
         <br />
      <?php endif; ?>

      <div class="org_ping">
      	<?php printf(__('<cite class="citeping">%s</cite> <span class="says">:</span>'), get_comment_author_link()) ?>
	  	<?php comment_text() ?>
            <div class="comm_meta_reply">
            <a class="comm_date"><?php printf(get_comment_date()) ?></a>
            <?php edit_comment_link(__('Edit', 'theron'),'  ','') ?></div>
     </div>
     </div>
     
     
<?php }

//Add Custom Slider Post
add_action('init', 'thn_slider_register');
 
function thn_slider_register() {
 
	$labels = array(
		'name' => __('Slider', 'theron'),
		'singular_name' => __('Slider Item', 'theron'),
		'add_new' => __('Add New', 'theron'),
		'add_new_item' => __('Add New Slide', 'theron'),
		'edit_item' => __('Edit Slides', 'theron'),
		'new_item' => __('New Slider', 'theron'),
		'view_item' => __('View Sliders', 'theron'),
		'search_items' => __('Search Sliders', 'theron'),
		'menu_icon' => get_stylesheet_directory_uri() . 'images/article16.png',
		'not_found' =>  __('Nothing found', 'theron'),
		'not_found_in_trash' => __('Nothing found in Trash', 'theron'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/slides.png',
		'rewrite' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','excerpt','thumbnail'),
		'register_meta_box_cb' => 'thn_add_meta'
	  ); 
 
	register_post_type( 'slider' , $args );
}
//Slider Link Meta Box
add_action("admin_init", "thn_add_meta");
 
function thn_add_meta(){
  add_meta_box("thn_credits_meta", "Link", "thn_credits_meta", "slider", "normal", "low");
}
 

function thn_credits_meta( $post ) {

  // Use nonce for verification
  $thndata = get_post_meta($post->ID, 'thn_slide_link', TRUE);
  wp_nonce_field( 'thn_meta_box_nonce', 'meta_box_nonce' ); 

  // The actual fields for data entry
  echo '<input type="text" id="thn_sldurl" name="thn_sldurl" value="'.$thndata.'" size="75" />';
}

//Save Slider Link Value
add_action('save_post', 'thn_save_details');
function thn_save_details($post_id){
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
      return;

if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'thn_meta_box_nonce' ) ) return; 

  if ( !current_user_can( 'edit_post', $post_id ) )
        return;

$thndata = esc_url( $_POST['thn_sldurl'] );
update_post_meta($post_id, 'thn_slide_link', $thndata);
return $thndata;  
}



add_action('do_meta_boxes', 'thn_slider_image_box');

function thn_slider_image_box() {
	remove_meta_box( 'postimagediv', 'slider', 'side' );
	add_meta_box('postimagediv', __('Slide Image', 'theron'), 'post_thumbnail_meta_box', 'slider', 'normal', 'high');
}

/* 
 * Loads the Options Panel
 */
 


	/* Set the file path based on whether we're in a child theme or parent theme */

	if ( STYLESHEETPATH != TEMPLATEPATH ) {
		define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');
	} else {
		define('OPTIONS_FRAMEWORK_URL', STYLESHEETPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/admin/');
	}

	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');

include(get_template_directory() . '/lib/script/pagination.php');
include(get_template_directory() . '/lib/includes/shortcodes.php');
include(get_template_directory() . '/lib/includes/widgets.php');
?>
