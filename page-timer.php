<?php
/*
Plugin Name: Page Timer
Author: Kevin Belanger
Description: Add a widget that shows the amount of time (in seconds) to generate the page
*/

class page_timer_widget extends WP_Widget{
	
	public function __construct(){
        parent::__construct('page_timer', 'Page Timer', array('description' => 'shows the amount of time (in seconds) to generate the page'));
    }
	
	public function widget($args, $instance){
        echo 'Page loaded in ' . timer_stop( ) . ' seconds.';
    }
}

add_action('widgets_init', function(){
	register_widget('page_timer_widget');
});