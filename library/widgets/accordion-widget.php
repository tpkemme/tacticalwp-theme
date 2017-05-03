<?php
/**
 * Class Name
 *
 * This is a description of the PHP class.  It is completely
 * normal for it to span more than a single line.
 *
 * @package PackageName
 * @version 1.0.0
 * @since 1.0.0
 */
/*
class TWP_Accordion_Widget extends WP_Widget {

	function TWP_Accordion_Widget() {
		$widget_ops = array( 'classname' => '', 'description' => '' );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => '' );
		$this->WP_Widget( '', 'title', $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		echo $before_widget;
		$title = apply_filters('widget_title', $instance['title'] );
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		foreach ( array('title') as $val ) {
			$instance[$val] = strip_tags( $new_instance[$val] );
		}
		return $instance;
	}

	function form( $instance ) {
		$defaults = array(
			'title' 		=> '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e("Title"); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
	<?php
	}
}

function _widget_func() {
	register_widget( 'TWP_Accordion_Widget' );
}

add_action( 'widgets_init', '_widget_func' );

*/
