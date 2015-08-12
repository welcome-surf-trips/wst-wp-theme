<div id="newslider_home">
<ul id="tabs_home">
        <?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => ''.$zn_fonts = of_get_option('number_select').'' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li> 
	<a href="javascript:;">
	<h4><?php the_title( ); ?></h4>
    <span><?php the_excerpt(); ?></span>
    </a>
	</li>
    
<?php endwhile; ?>
</ul>
<ul id="output_home">
<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => ''.$zn_fonts = of_get_option('number_select').'' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $thnnivoimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <?php $thndata = get_post_meta($post->ID, 'thn_slide_link', TRUE); ?>
 <li> 
 
<a href="<?php echo $thndata; ?>"  ><img src="<?php echo $thnnivoimg ?>" alt="<?php the_title(); ?>" title="#nv_<?php the_ID(); ?>" /></a>
    <a class="news_buttn" href="<?php echo $thndata; ?>"><?php _e('Read More', 'theron'); ?></a>
	</li>
    
<?php endwhile; ?>
</ul>
</div> 

            <?php wp_reset_query(); ?>
