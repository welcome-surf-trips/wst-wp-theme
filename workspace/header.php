<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
<?php if ( is_home() ) { ?>
  <title>Welcome Surf Trips Blog</title>
<?php } else { ?>
  <title><?php wp_title(); ?></title>
<?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php get_template_part('skins');?>


    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<!--[if lte IE 7]><script src="<?php get_template_directory_uri(); ?>/ie6/warning.js"></script><script>window.onload=function(){e("<?php get_template_directory_uri(); ?>/ie6/")}</script><![endif]-->

    <div class="center <?php echo of_get_option('head_select'); ?>-social" id="social_icon">
 <!--SOCIAL ICONS-->   
<div class="social_wrap">
    <div class="social">
<ul>
<?php if ( of_get_option('fbsoc_text') ) { ?>
<li class="soc_fb"><a title="Facebook" target="_blank" href="<?php echo of_get_option('fbsoc_text'); ?>">Facebook</a></li><?php } ?>
<?php if ( of_get_option('ttsoc_text') ) { ?>
<li class="soc_tw"><a title="Twitter" target="_blank" href="<?php echo of_get_option('ttsoc_text'); ?>">Twitter</a></li><?php } ?>
<?php if ( of_get_option('gpsoc_text') ) { ?>
<li class="soc_plus"><a title="Google Plus" target="_blank" href="<?php echo of_get_option('gpsoc_text'); ?>">Google Plus</a></li><?php } ?>
<?php if ( of_get_option('ytbsoc_text') ) { ?>
<li class="soc_ytb"><a title="Youtube" target="_blank" href="<?php echo of_get_option('ytbsoc_text'); ?>">Youtube</a></li><?php } ?>
<?php if ( of_get_option('flkrsoc_text') ) { ?>
<li class="soc_flkr"><a title="Flickr" target="_blank" href="<?php echo of_get_option('flkrsoc_text'); ?>">Flickr</a></li><?php } ?>
<?php if ( of_get_option('lnkdsoc_text') ) { ?>
<li class="soc_lnkd"><a title="Linkedin" target="_blank" href="<?php echo of_get_option('lnkdsoc_text'); ?>">Linkedin</a></li><?php } ?>
<?php if ( of_get_option('pinsoc_text') ) { ?>
<li class="soc_pin"><a title="Pinterest" target="_blank" href="<?php echo of_get_option('pinsoc_text'); ?>">Pinterest</a></li><?php } ?>
<?php if ( of_get_option('tmblrsoc_text') ) { ?>
<li class="soc_tmblr"><a title="Tumblr" target="_blank" href="<?php echo of_get_option('tmblrsoc_text'); ?>">Tumblr</a></li><?php } ?>
<?php if ( of_get_option('instasoc_text') ) { ?>
<li class="soc_insta"><a title="Instagram" target="_blank" href="<?php echo of_get_option('instasoc_text'); ?>">Instagram</a></li><?php } ?>
<?php if ( of_get_option('vimsoc_text') ) { ?>
<li class="soc_vim"><a title="Vimeo" target="_blank" href="<?php echo of_get_option('vimsoc_text'); ?>">Vimeo</a></li><?php } ?>
<?php if ( of_get_option('rsssoc_text') ) { ?>
<li class="soc_rss"><a title="Rss Feed" target="_blank" href="<?php echo of_get_option('rsssoc_text'); ?>">RSS</a></li><?php } ?>
</ul>
    </div>
</div>
  <!--SOCIAL ICONS END-->   
</div> 
<!--HEADER START-->
<div class="headcenter <?php echo of_get_option('head_select'); ?>">
<div id="header">


    	<!--LOGO START-->
        <div class="logo">
        <?php if ( of_get_option('logo_uploader') ) { ?>
             <div class="outer-center">
        <div class="inner-center">
         <a title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('logo_uploader'); ?>" /></a>
         </div>
   		 </div>
    	 <div style="clear: both;"></div>
         <?php } else { ?>  
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ;?></a></h1>
        <?php } ?>
        <div class="desc"><?php bloginfo('description')?></div>
        </div>
        
        <!--LOGO END-->
        
        <!--MENU STARTS-->
        <div id="menu_wrap"><div class="center"><div id="topmenu"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></div></div></div>
        <!--MENU END-->
        

</div>
</div>

<?php if ( is_singular()) {?><div class="center"><div class="slide_shadow <?php echo of_get_option('head_select'); ?>-shadow"></div></div><?php } ?>
<!--HEADER END-->
    <div class="center">
