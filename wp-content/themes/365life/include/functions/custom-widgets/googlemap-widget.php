<?php
/**
 * Plugin Name: SAINTDO Twitter Widget
 * Description: Show last tweets from Twitter.
 * Version: 1.0
 * Author: Sittipol Sunthornpiyakul
 * Author URI: http://www.saintdo.me
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'googlemap_widget' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function GoogleMap_widget() {
	register_widget( 'GoogleMap' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class GoogleMap extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function GoogleMap() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'googlemap-widget', 'description' => __('Google map widget.', 'googlemap-widget') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'googlemap-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'googlemap-widget', __('Google Map SAINTDO', 'googlemap'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('GoogleMap', $instance['title'] );
		$googlemap_url = $instance['googlemap_url'];
		$googlemap_width = $instance['googlemap_width'];
		$googlemap_height = $instance['googlemap_height'];
		
			/* Before widget (defined by themes). */
		echo $before_widget;
		if($title)
			echo $before_title . $title . $after_title;
		/* Display the widget title if one was input (before and after defined by themes). */
		?>
		<div> 
		
		<iframe width="<?php echo $googlemap_width;?>" height="<?php echo $googlemap_height;?>" class="googlemap alignleft" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $googlemap_url;?>"></iframe>
		
							
		<?php 
		/* After widget (defined by themes). */
		echo $after_widget;
		echo "</div>";
		
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['googlemap_url'] = strip_tags( $new_instance['googlemap_url'] );
		$instance['googlemap_width'] = strip_tags( $new_instance['googlemap_width'] );
		$instance['googlemap_height'] = strip_tags( $new_instance['googlemap_height'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Google Map Widget', 'Google Map Widget'), 'googlemap_width' => '150', 'googlemap_height' => '150' ,'googlemap_url' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="width100" />
		</p>

		<!-- Your Name: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'googlemap_url' ); ?>"><?php _e('Map URL', 'example'); ?></label>
			<textarea  id="<?php echo $this->get_field_id( 'googlemap_url' ); ?>" name="<?php echo $this->get_field_name( 'googlemap_url' ); ?>" class="width100"><?php echo $instance['googlemap_url']; ?></textarea>
		</p>

		<!-- Your Name: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'googlemap_width' ); ?>"><?php _e('Map Width', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googlemap_width' ); ?>" name="<?php echo $this->get_field_name( 'googlemap_width' ); ?>" value="<?php echo $instance['googlemap_width']; ?>"  class="width100" />
		</p>
		
		<!-- Your Name: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'googlemap_height' ); ?>"><?php _e('Map Height', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googlemap_height' ); ?>" name="<?php echo $this->get_field_name( 'googlemap_height' ); ?>" value="<?php echo $instance['googlemap_height']; ?>"  class="width100" />
		</p>
		
	
	<?php
	}
}

?>