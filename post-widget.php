//Creating a post_details widget

<?php

    /*  Register widget with wordpress */
    
    class post_widget extends WP_Widget {
        function __construct() {
		parent::__construct(
                        // Base ID
			'post_details', 
                        
                        //Name of widget
			__('Post Details', 'post_domain'), 
                        
			array( 'description' => __( 'A widget to display post details', 'post_domain' ) )
		);
	}
        
        //Front-end display of widget
        
        public function widget($args,$instance){
            $title = apply_filters( 'widget_title', $instance['title'] );
        }
        
        public function form($instance){
            if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
                <?php 
        }
        
        public function update($new_instance,$ld_instance){
            
        }
    }
?>