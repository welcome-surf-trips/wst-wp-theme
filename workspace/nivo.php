<div class="slider-wrapper theme-default">
<div id="zn_nivo" class="zn_nivo">

        <?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => ''.$zn_fonts = of_get_option('number_select').'' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $thndata = get_post_meta($post->ID, 'thn_slide_link', TRUE); ?>
        <?php $thnnivoimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <?php $thnnivothmb = wp_get_attachment_thumb_url( get_post_thumbnail_id($post->ID) ); ?>
        <a href="<?php echo $thndata; ?>" target="_blank"><img src="<?php echo $thnnivoimg ?>" data-thumb="<?php echo $thnnivothmb ?>" alt="<?php the_title(); ?>" title="#nv_<?php the_ID(); ?>" /></a>

         <?php endwhile; ?>

            <?php wp_reset_query(); ?>
        </div>
        
        <?php if(of_get_option('sldrtxt_checkbox') == "1"){ ?>
        <?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => ''.$zn_fonts = of_get_option('number_select').'' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>           
            <div id="nv_<?php the_ID(); ?>" class="nivo-html-caption">
        <?php $thndata = get_post_meta($post->ID, 'thn_slide_link', TRUE); ?>           
            <?php the_title( '<h2 class="entry-title"><a href="' . $thndata . '" target="_blank" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                <?php the_excerpt(); ?>
            </div>
                    <?php endwhile; ?>
         <?php } ?>

</div>
