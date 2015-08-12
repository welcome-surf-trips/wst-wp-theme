<?php get_header(); ?>

<!--Content-->
<div id="content">
<div class="single_wrap">
<div class="single_post">
                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                
                <div class="post_content">
                
                    <h1 class="postitle entry-title"><?php the_title(); ?></h1>
                    <div class="single_metainfo"><a class="comm_date published updated"><?php the_time( get_option('date_format') ); ?></a><?php if(of_get_option('dissauth_checkbox') == "0"){ ?>  <span class=”vcard author”><span class=”fn”><a class="meta_auth"><?php the_author(); ?></a><?php } ?></span></span>
                    <?php edit_post_link(); ?>
                    </div>
                    <div class="thn_post_wrap"><?php the_content(); ?> </div>
                    <div style="clear:both"></div>
                    <div class="thn_post_wrap"><?php wp_link_pages('<p class="pages"><strong>'.__('Pages:').'</strong> ', '</p>', 'number'); ?></div>
                    
                    
                    <!--Post Footer-->
                    <div class="post_foot">
					<?php if(of_get_option('disscats_checkbox') == "0"){ ?>
                        <div class="post_meta">
     <?php if( has_tag() ) { ?><div class="post_tag"><div class="tag_list"><?php the_tags('','  '); ?></div></div><?php } ?>
     <?php if( has_category() ) { ?><div class="post_cat"><div class="catag_list"><?php the_category(' '); ?></div></div><?php } ?>
                        
                        </div>
					<?php } ?>
                        
                   </div>
                    
                </div>
                
<?php if(of_get_option('dissshare_checkbox') == "0"){ ?><?php get_template_part('share_this');?><?php } ?>
                
                        </div>
                        
            <?php endwhile ?> 
                </div>
    <?php if(of_get_option('dissrltd_checkbox') == "0"){ ?><div id="related"><?php get_template_part('related');?></div><?php } ?>       
				<div class="comments_template"><?php comments_template('',true); ?></div>
            <?php endif ?>

</div>

    
    <!--POST END-->
    
<?php if(of_get_option('nosidebar_checkbox') == "0"){ ?><?php get_sidebar();?><?php } ?>
</div>
<?php get_footer(); ?>