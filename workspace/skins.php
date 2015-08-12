<style type="text/css">
/*LOGO COLOR*/
.logo h1 a, .desc{color:<?php echo of_get_option('logcol_colorpicker'); ?>!important;}

/*Mneu Font Color*/
body #topmenu ul li a , body #topmenu ul li ul li a, body #topmenu ul li ul li ul li a, .lay2 .postitle a, #menu-icon{color:<?php echo of_get_option('menucol_colorpicker'); ?>!important;}

<?php if ( of_get_option('menucol_colorpicker') == "#ffffff") { ?>
#footmenu a, #footmenu, .copytext, .copytext a, body #copyright a, body #copyright{ color:#888;}
<?php }else{ ?>
.lay2 .postitle a, .lay2 .post_content, #footmenu a, #footmenu, .copytext, .copytext a, body #copyright a, body #copyright{color:<?php echo of_get_option('menucol_colorpicker'); ?>!important;}<?php } ?>

/*Disable all pattern images*/
<?php if(of_get_option('pattrndiss_checkbox') == "1"){ ?>
#header, #topmenu ul li ul li, .lay2 .post_content, #copyright, body #topmenu ul > li ul li:hover{ background-image:none!important;}
body #menu_wrap, #topmenu ul li ul li{ background:<?php echo of_get_option('tertelm_colorpicker'); ?> url("<?php echo get_template_directory_uri(); ?>/images/transblack.png") repeat!important;}
<?php } ?>

/*POST TITLE*/
.postitle a, .single_post .postitle, .midrow_block h3{color:<?php echo of_get_option('posttt_colorpicker'); ?>!important;}

/*OTHER HEADINGS*/
#sidebar .widgettitle, #sidebar .widgettitle a, #footer .widgets .widgettitle, #footer .widgets .widgettitle a, #related h3{ color:<?php echo of_get_option('othhdngs_colorpicker'); ?>!important;}

/*Content Font Color*/
body, a, .comment-form-author input, .comment-form-email input, .comment-form-url input, .comment-form-comment textarea, .form-submit input, #searchsubmit, .amp_page, .amp_next, .amp_prev, .page-numbers, .amp_page:hover, .amp_next:hover, .amp_prev:hover, .page-numbers:hover, .navigation .current, .single_post .scl_button a:hover, #footer .widgets .widget ul li .znn_wgt_tt, #searchform #s, .entry-content input, .entry-content textarea, .entry-content #submit_msg, .comm_meta_reply a, #thn_welcom, .single_metainfo a, .catag_list a, .tag_list a, .single_post .share_this a, #sidebar .widgets .widget li a{color:<?php echo of_get_option('context_colorpicker'); ?>;}
.comm_meta_reply a, .org_comment .comm_date, body .org_comment .comment-edit-link, body .org_comment .comment-reply-link, .org_ping .comm_date, body .org_ping .comment-edit-link, body .org_ping .comment-reply-link, ul#tabs li a.current, .lay2 .date_meta, #footer .widgets .widget ul li a{color:<?php echo of_get_option('context_colorpicker'); ?>!important;}

.comments_template #comments, #comments_ping, .commentmetadata span{color:<?php echo of_get_option('context_colorpicker', '#333333'); ?>!important;}
/*LINK COLOR*/
.postitle a:hover, .thn_post_wrap a { color:<?php echo of_get_option('link_colorpicker'); ?>!important;}



/*Primary Elements Color*/
.slider-wrapper, #slide_acord, #thn_welcom, .midrow_blocks, .lay1 .hentry, .lay2 .hentry, .lay3 .hentry, .lay4 .hentry, #footer, .amp_page:hover, .amp_next:hover, .amp_prev:hover, .page-numbers:hover, .navigation .current, .single_wrap .single_post, #newslider, #sidebar .widgets .widget, .comments_template, #commentform, .comment-form-author label, .comment-form-email label, .comment-form-url label, .trigger_wrap, .search_term, .amp_page, .amp_next, .amp_prev, .page-numbers, .single_post .scl_button a:hover { background:<?php echo of_get_option('prmelm_colorpicker'); ?>!important;}


/*Secondary Elements Color*/
#newslider_home ul#tabs_home li a.current, #newslider_home .news_buttn, .midrow_block:hover, .lay1 .catmeta, .lay4 .catmeta, #wp-calendar #today, .form-submit input, #searchsubmit, .single_post .scl_button a, .entry-content #submit_msg, .amp_current, .amp_current:hover{ background:<?php echo of_get_option('secelm_colorpicker'); ?>!important;}

.lay1 .postitle a:hover, .lay2 .postitle a:hover, .lay3 .postitle a:hover, .lay4 .postitle a:hover, .lay5 .postitle a:hover, .thn_twitter .tweet_text a, .widget_tag_cloud a:hover, .textwidget a, #newslider h3, ul#tabs li a:hover, .comments_template #comments a, .commentmetadata, .commentmetadata a, .org_comment a, .org_ping a, h3#reply-title, .logged-in-as a, .archive-template ul li a:hover, #thn_welcom a{color:<?php echo of_get_option('secelm_colorpicker'); ?>!important;}

.nivo-caption, .lay2 .post_content, #sidebar .widgettitle, #sidebar .widgettitle a {border-color:<?php echo of_get_option('secelm_colorpicker'); ?>;}
#topmenu{ border-bottom-color:<?php echo of_get_option('secelm_colorpicker'); ?>!important;}

body #topmenu ul > li ul li:hover, .menu_active{ background:<?php echo of_get_option('secelm_colorpicker'); ?> 
<?php if(of_get_option('pattrndiss_checkbox') == "0"){ ?> url("<?php echo get_template_directory_uri(); ?>/images/pattern.png") repeat<?php } ?>!important;}


/*TEXT COLOR ON SECONDARY ELEMENTS*/
.midrow_block:hover h3, .form-submit input, #searchsubmit, #topmenu ul > li ul li:hover > a, .lay1 .catmeta a, .lay4 .catmeta a, .amp_current, .entry-content #submit_msg, .midrow_block:hover, .midrow_block:hover a{color:<?php echo of_get_option('secelmtxt_colorpicker'); ?>!important;}


/*Tertiary Elements Color*/
#header, #topmenu ul li ul li, .lay2 .post_content, #copyright{background:<?php echo of_get_option('tertelm_colorpicker','#302f2f'); ?> <?php if(of_get_option('pattrndiss_checkbox') == "0"){ ?> url("<?php echo get_template_directory_uri(); ?>/images/pattern.png") repeat<?php } ?>!important;}
#menu_wrap{background:<?php echo of_get_option('tertelm_colorpicker','#302f2f'); ?> <?php if(of_get_option('pattrndiss_checkbox') == "0"){ ?> url("<?php echo get_template_directory_uri(); ?>/images/menu_wrap.png") repeat<?php } ?>!important;}

<?php if ( of_get_option('tertelm_colorpicker') == "#302f2f") { ?>#topmenu ul li ul li{ border-bottom:1px solid #333;}<?php }else{ ?>#topmenu ul li ul li{ border:none;}<?php } ?>

/*ELEMENT BORDER*/
.lay4 .hentry, .single_wrap .single_post, .post_foot, ul#tabs li , #sidebar .widgets .widget li, .comments_template #comments, #comments_ping, #comments_ping, .commentlist li, #sidebar #searchform #s, #wp-calendar caption, #footer #wp-calendar caption, .thn_paginate span, .thn_paginate a, .navigation a, .navigation span, .wp-caption, .comment-form-author input, .comment-form-email input, .comment-form-url input, .comment-form-comment textarea, .comment-form-author label, .comment-form-email label, .comment-form-url label{ border-color:<?php echo of_get_option('prmelmbrd_colorpicker'); ?>;}



</style>