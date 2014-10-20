<?php

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function framepress_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'framepress_news_widget', // Widget slug.
                 'FramePress News', // Title.
                 'framepress_news_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'framepress_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function framepress_news_widget_function() {

	// Display whatever it is you want to show.
	echo "Current FramePress version 1.0.7<br/><br/>";
        
        echo "Latest changes: <br/>";
        echo "- Added news widget";
}