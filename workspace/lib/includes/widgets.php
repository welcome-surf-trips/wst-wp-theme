<?php
/*
 *CUSTOM 125x125 AD
 */
add_action( 'widgets_init', 'thn_ad125x125_widgets' );

/*
 * Register widget.
 */
function thn_ad125x125_widgets() {
	register_widget( 'thn_Ad125x125_Widget' );
}

/*
 * Widget class.
 */
class thn_ad125x125_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad125x125_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad125x125_widget', 'description' => __('A theron widget that allows the display and configuration of of a single 125x125 Banner.', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 125, 'height' => 125, 'id_base' => 'thn_ad125_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad125x125_widget', __('Custom 125x125 Ad', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];
		$ad2 = $instance['ad2'];
		$link2 = $instance['link2'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-125x125">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="125" height="125"  /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="125" height="125" alt="" />';
			
				/* Display Ad */
		if ( $link2 )
			echo '<a target="_blank" href="' . $link2 . '"><img src="' . $ad2 . '" width="125" height="125"  /></a>';
			
		elseif ( $ad2 )
		 	echo '<img src="' . $ad2 . '" width="125" height="125" alt="" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];
		$instance['ad2'] = $new_instance['ad2'];
		$instance['link2'] = $new_instance['link2'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link' => 'http://www.towfiqi.com',
		'ad2' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link2' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>


		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<strong><?php _e('1st Ad block','theron');?></strong>
		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" />
		</p>
        
        
        <strong><?php _e('2nd Ad block','theron');?></strong>        
        		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad2' ); ?>"><?php _e('Ad image url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad2' ); ?>" name="<?php echo $this->get_field_name( 'ad2' ); ?>" value="<?php echo $instance['ad2']; ?>" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link2' ); ?>"><?php _e('Ad link url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" value="<?php echo $instance['link2']; ?>" />
		</p>
		
	<?php
	}

}

/*
 *CUSTOM 250x250 AD
 */
add_action( 'widgets_init', 'thn_ad250x250_widgets' );

/*
 * Register widget.
 */
function thn_ad250x250_widgets() {
	register_widget( 'thn_Ad250x250_Widget' );
}

/*
 * Widget class.
 */
class thn_ad250x250_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad250x250_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad250x250_widget', 'description' => __('A theron widget that allows the display and configuration of of a single 250x250 Banner.', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 250, 'height' => 250, 'id_base' => 'thn_ad250_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad250x250_widget', __('Custom 250x250 Ad', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-250x250">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="250" height="250"  alt="" /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="250" height="250" alt="" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" />
		</p>
		
	<?php
	}

}

/*
 *CUSTOM 160x600 AD
 */
add_action( 'widgets_init', 'thn_ad160x600_widgets' );

/*
 * Register widget.
 */
function thn_ad160x600_widgets() {
	register_widget( 'thn_Ad160x600_Widget' );
}

/*
 * Widget class.
 */
class thn_ad160x600_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad160x600_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad160x600_widget', 'description' => __('A theron widget that allows the display and configuration of of a single 160x600 Banner.', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_ad160x600_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad160x600_widget', __('Custom 160x600 Ad', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-160x600">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="160" height="600" alt="" /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="160" height="600" alt="" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_600.jpg",
		'link' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" />
		</p>
		
	<?php
	}

}

/* ---------------------------- */
/* -------- Popular Posts Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'thn_pop_widgets' );

/*
 * Register widget.
 */
function thn_pop_widgets() {
	register_widget( 'thn_pop_Widget' );
}

/*
 * Widget class.
 */
class thn_pop_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_pop_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_pop_widget', 'description' => __('A theron widget that displays the most popular posts of the site, Based on the comments count ', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_pop_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_pop_widget', __('Popular Posts Widget', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_pop">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&orderby=comment_count&posts_per_page=' . $num);
		
		echo '<ul>';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = thn_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img2.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		echo ''. thn_excerpt('thn_excerptlength_index', 'thn_excerptmore') . '';
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" />
		</p>
		
		
	<?php
	}

}


/* ---------------------------- */
/* -------- Random Posts Widget -------- */
/* ---------------------------- */

add_action( 'widgets_init', 'thn_rand_widgets' );

/*
 * Register widget.
 */
function thn_rand_widgets() {
	register_widget( 'thn_rand_Widget' );
}

/*
 * Widget class.
 */
class thn_rand_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_rand_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_rand_widget', 'description' => __('A theron widget that displays the random posts of the site', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_rand_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_rand_widget', __('Random Posts Widget', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_rand">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&orderby=rand&posts_per_page=' . $num);
		
		echo '<ul>';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = thn_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img2.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		echo ''. thn_excerpt('thn_excerptlength_index', 'thn_excerptmore') . '';
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" />
		</p>
		
		
	<?php
	}

}

/*
	/* ---------------------------- */
	/* -------- Featured Posts Widget -------- */
	/* ---------------------------- */
add_action( 'widgets_init', 'thn_feat_widgets' );

/*
 * Register widget.
 */
function thn_feat_widgets() {
	register_widget( 'thn_feat_Widget' );
}

/*
 * Widget class.
 */
class thn_feat_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_feat_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_feat_widget', 'description' => __('A theron widget that displays the featured posts from your selected category', 'theron') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_feat_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_feat_widget', __('Featured Posts Widget', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$cat = $instance['cat'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_feat">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&cat=' . $cat .' &posts_per_page=' . $num);
		echo '<ul>';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = thn_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img2.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		echo ''. thn_excerpt('thn_excerptlength_index', 'thn_excerptmore') . '';
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		$instance['cat'] = $new_instance['cat'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		'cat' => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
        
        <!-- Category of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'cat' ); ?>"><?php _e('Category:', 'theron') ?></label>
            <?php wp_dropdown_categories( array( 'name' => $this->get_field_name('cat'), 'selected' => $instance['cat'] ) ); ?>
			
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" />
		</p>
		
		
	<?php
	}

}
/*
	/* ---------------------------- */
	/* -------- Twitter Feeds Widget -------- */
	/* ---------------------------- */
add_action( 'widgets_init', 'thn_twt_widgets' );

/*
 * Register widget.
 */
function thn_twt_widgets() {
	register_widget( 'thn_twt_Widget' );
}

/*
 * Widget class.
 */
class thn_twt_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_twt_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_twt_widget', 'description' => __('A theron widget that displays the Twitter Feeds from your twitter account', 'theron') );

		/* Widget control settings */
		/* Create the widget */
		$this->WP_Widget( 'thn_twt_widget', __('Twitter Feeds Widget', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$count = $instance['count'];
		$cat = $instance['cat'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_twitter"><script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.tweet.js"></script>
		<script type="text/javascript">
jQuery(document).ready(function() { 
jQuery(".thn_twitter").tweet({
          avatar_size: 48,
          count: ' . $count . ',
          fetch: 20,
          filter: function(t){ return ! /^@\w+/.test(t.tweet_raw_text); },
          username: "' . $cat . '"

      });  
});                      
</script>
		';
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['count'] = $new_instance['count'];
		$instance['cat'] = $new_instance['cat'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'count' => '5',
		'cat' => 'towfiqi',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
        
        <!-- Category of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'cat' ); ?>"><?php _e('Account ID:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'cat' ); ?>" name="<?php echo $this->get_field_name( 'cat' ); ?>" value="<?php echo $instance['cat']; ?>" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e('Number of Posts:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" value="<?php echo $instance['count']; ?>" />
		</p>
		
		
	<?php
	}

}

/*
	/* ---------------------------- */
	/* -------- Flickr Photostream Widget -------- */
	/* ---------------------------- */
add_action( 'widgets_init', 'thn_flckr_widgets' );

/*
 * Register widget.
 */
function thn_flckr_widgets() {
	register_widget( 'thn_flckr_Widget' );
}

/*
 * Widget class.
 */
class thn_flckr_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_flckr_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_flckr_widget', 'description' => __('A theron widget that displays Flickr image stream from your Flickr account', 'theron') );

		/* Widget control settings */
		/* Create the widget */
		$this->WP_Widget( 'thn_flckr_widget', __('Flickr Photostream Widget', 'theron'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$flickrID = $instance['flickrID'];
		$postcount = $instance['postcount'];
		$type = $instance['type'];
		$display = $instance['display'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display Flickr Photos */
		 ?>
			
			<div id="flickr_badge_wrapper" class="clearfix">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $postcount ?>&amp;display=<?php echo $display ?>&amp;size=s&amp;layout=x&amp;source=<?php echo $type ?>&amp;<?php echo $type ?>=<?php echo $flickrID ?>"></script>
			</div>
		
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['flickrID'] = strip_tags( $new_instance['flickrID'] );
		$instance['postcount'] = $new_instance['postcount'];
		$instance['type'] = $new_instance['type'];
		$instance['display'] = $new_instance['display'];

		/* No need to strip tags for.. */

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
		'title' => 'My Photostream',
		'flickrID' => '82938015@N00',
		'postcount' => '9',
		'type' => 'user',
		'display' => 'random',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'theron') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Flickr ID: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'flickrID' ); ?>"><?php _e('Flickr ID:', 'theron') ?> (<a href="http://idgettr.com/">idGettr</a>)</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'flickrID' ); ?>" name="<?php echo $this->get_field_name( 'flickrID' ); ?>" value="<?php echo $instance['flickrID']; ?>" />
		</p>
		
		<!-- Postcount: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'postcount' ); ?>"><?php _e('Number of Photos:', 'theron') ?></label>
			<select id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" class="widefat">
				<option <?php if ( '3' == $instance['postcount'] ) echo 'selected="selected"'; ?>>3</option>
				<option <?php if ( '6' == $instance['postcount'] ) echo 'selected="selected"'; ?>>6</option>
				<option <?php if ( '9' == $instance['postcount'] ) echo 'selected="selected"'; ?>>9</option>
			</select>
		</p>
		
		<!-- Type: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Type (user or group):', 'theron') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'user' == $instance['type'] ) echo 'selected="selected"'; ?>>user</option>
				<option <?php if ( 'group' == $instance['type'] ) echo 'selected="selected"'; ?>>group</option>
			</select>
		</p>
		
		<!-- Display: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'display' ); ?>"><?php _e('Display (random or latest):', 'theron') ?></label>
			<select id="<?php echo $this->get_field_id( 'display' ); ?>" name="<?php echo $this->get_field_name( 'display' ); ?>" class="widefat">
				<option <?php if ( 'random' == $instance['display'] ) echo 'selected="selected"'; ?>>random</option>
				<option <?php if ( 'latest' == $instance['display'] ) echo 'selected="selected"'; ?>>latest</option>
			</select>
		</p>
		
	<?php
	}
}

