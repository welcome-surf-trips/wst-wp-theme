
<div id="slide_acord">

        <div id="accordion">
<ul class=" kwicks horizontal">
<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => ''.$zn_fonts = of_get_option('number_select').'' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
 <li>
         <?php $thndata = get_post_meta($post->ID, 'thn_slide_link', TRUE); ?>
<?php if(of_get_option('sldrtxt_checkbox') == "1"){ ?>
<div class="acord_text">

            <?php the_title( '<h2 class="entry-title"><a href="' . $thndata . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                <?php the_excerpt(); ?>
 </div>
 <?php } ?>
        <a class="dlthref" href="<?php echo $thndata; ?>"><?php the_post_thumbnail(); ?></a>

 
 </li>
<?php endwhile; ?>
</ul>
</div>
        
        </div>