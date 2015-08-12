<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>

<!--Content-->
<div id="content">
<div class="single_wrap">
<div class="single_post archive-template">
		<?php the_post(); ?>
                    <h1 class="postitle"><?php the_title(); ?></h1>


<div class="sitemap_block">
<h2><?php _e('Pages', 'theron'); ?></h2>
    <ul><?php wp_list_pages("title_li=" ); ?></ul>
</div>



<div class="sitemap_block">
<h2><?php _e('Categories', 'theron'); ?></h2>
    <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
</div>

<div class="sitemap_block">
<h2><?php _e('All Blog Posts', 'theron'); ?></h2>
    <ul><?php $archive_query = new WP_Query('showposts=1000&cat=-8');
            while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                 (<?php comments_number('0', '1', '%'); ?>)
                </li>
            <?php endwhile; ?>
    </ul> 
 </div>
 
<div class="sitemap_block">
<h2><?php _e('Archives', 'theron'); ?></h2>
    <ul>
        <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
    </ul>
</div>

<div class="sitemap_block">
<h2>Feeds</h2>
    <ul>
        <li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Main RSS</a></li>
        <li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>
    </ul>
</div>


                </div>
			


    </div>
   
    <!--PAGE END-->
    

</div>
<?php get_footer(); ?>