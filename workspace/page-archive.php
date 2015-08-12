<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>

<!--Content-->
<div id="content">
<div class="single_wrap">
<div class="single_post archive-template">


		<?php the_post(); ?>
		<h2 class="postitle"><?php the_title(); ?></h2>
		
	
		<div class="arcblock">
		<h2><?php _e('Archives by Subject', 'theron'); ?>:</h2>
		<ul>
			 <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
		</ul>
		</div>
    	
        <div class="arcblock">
		<h2><?php _e('Archives by Month', 'theron'); ?>:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
        </div>
        
        <div class="arcblock">
 		<h2><?php _e('Archives by Year', 'theron'); ?>:</h2>
		<ul>       
        <?php wp_get_archives('type=yearly'); ?>
		</ul>
        </div>
        
        

                </div>
			


    </div>
   
    <!--PAGE END-->
    

</div>
<?php get_footer(); ?>