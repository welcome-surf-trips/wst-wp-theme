<div id="newslider">
<?php
$backup = $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>3, // Number of related posts that will be shown.
		'ignore_sticky_posts'=>1
	);

$my_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<br style="clear:both" /><ul id="output">';
		while ($my_query->have_posts()) {
			$my_query->the_post();

		?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            	<?php if ( has_post_thumbnail() ) : ?>
                <span class="related_img"><?php the_post_thumbnail('medium'); ?></span>
                <?php elseif($photo = thn_get_images('numberposts=1', true)): ?>
                <span class="related_img"><?php echo wp_get_attachment_image($photo[0]->ID ,'medium'); ?></span>
                <?php else : ?>
            	<span class="related_img"><img src="<?php echo get_template_directory_uri(); ?>/images/blank_img.png" alt="<?php the_title_attribute(); ?>" class="thumbnail"/></span>
            	<?php endif; ?>



</a>

</li>

		<?php
		}
	echo '</ul>';
	}
}
$post = $backup;
wp_reset_query(); 


?>

<?php
$backup = $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>4, // Number of related posts that will be shown.
		'ignore_sticky_posts'=>1
	);
	
$title_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<h3>'.__('Related Posts' , 'theron').'</h3><ul id="tabs">';
		while ($title_query->have_posts()) {
			$title_query->the_post();

		?>
<li>
<a href="javascript:;" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

</li>

		<?php
		}
	echo '</ul>';
	}


$post = $backup;
wp_reset_query(); 
	}


?>
</div>