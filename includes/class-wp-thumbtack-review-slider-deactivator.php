<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Thumbtack_Review
 * @subpackage WP_Thumbtack_Review/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WP_Thumbtack_Review
 * @subpackage WP_Thumbtack_Review/includes
 * @author     Josh <email@example.com>
 */
class WP_Thumbtack_Review_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

	//unschdule Thumbtack review download
	//first find the next schedule callback time
    $time_next_firing = wp_next_scheduled("wpthumbtack_daily_event");

    //use this function to unschedule it by passing the time and event name
    wp_unschedule_event($time_next_firing, "wpthumbtack_daily_event");
	wp_clear_scheduled_hook('wpthumbtack_daily_event');
	
	}

}
