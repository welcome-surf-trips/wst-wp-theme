<div id="content">
<div class="lay5">
<div class="single_wrap">
<?php if(of_get_option('frontcat_checkbox') == "1"){ ?>
<?php if(is_front_page()) { 
	 $args = array(
				   'cat' => ''.$zn_front = of_get_option('front_cat').'',
				   'post_type' => 'post',
				   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
				   'posts_per_page' => ''.$zn_fonts = of_get_option('frontnum_select').'');
	query_posts($args);
} ?>
<?php }?>

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                   
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
<div class="single_post">                
                <div class="post_content">
                    <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="single_metainfo"><a class="comm_date"><?php the_time( get_option('date_format') ); ?></a><?php if(of_get_option('dissauth_checkbox') == "0"){ ?>  <a class="meta_auth"><?php the_author(); ?></a><?php } ?>
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
                </div>                        
            <?php endwhile ?> 

        
            <?php endif ?>

</div>
                            <?php if (function_exists("thn_paginate")) {thn_paginate();} ?>

    </div>

            
<?php if(of_get_option('nosidebar_checkbox') == "0"){ ?><?php get_sidebar();?><?php } ?>
	</div>