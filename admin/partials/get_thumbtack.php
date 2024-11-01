<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Thumbtack_Review
 * @subpackage WP_Thumbtack_Review/admin/partials
 */
 
     // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
	
	    // wordpress will add the "settings-updated" $_GET parameter to the url
		//https://freegolftracker.com/blog/wp-admin/admin.php?settings-updated=true&page=wp_thumbtack-reviews
    if (isset($_GET['settings-updated'])) {
        // add settings saved message with the class of "updated"
        add_settings_error('thumbtack-radio', 'wpthumbtack_message', __('Settings Saved', 'wp-thumbtack-review-slider'), 'updated');
    }

	if(isset($this->errormsg)){
		add_settings_error('thumbtack-radio', 'wpthumbtack_message', __($this->errormsg, 'wp-thumbtack-review-slider'), 'error');
	}
?>
<div class="wrap wp_thumbtack-settings" id="">
	<h1><img src="<?php echo plugin_dir_url( __FILE__ ) . 'logo.png'; ?>"></h1>
<?php 
include("tabmenu.php");
?>
<div class="wpthumbtack_margin10">

	<form action="options.php" method="post">
		<?php
		// output security fields for the registered setting "wp_thumbtack-get_thumbtack"
		settings_fields('wp_thumbtack-get_thumbtack');
		// output setting sections and their fields
		// (sections are registered for "wp_thumbtack-get_thumbtack", each field is registered to a specific section)
		do_settings_sections('wp_thumbtack-get_thumbtack');
		// output save settings button
		submit_button('Save Settings & Download');
		?>
		<p><i>Note: It may take a little time after you hit the Save button to download your reviews.</i></p>
	</form>
	<?php 
// show error/update messages
		settings_errors('thumbtack-radio');

?>

</div>

</div>

	

