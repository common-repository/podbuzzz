<?php
/**
 * Plugin Name: PodBuzzz Podcast Review Widget
 * Description: Ask your audience to review your podcast when they're on your website. 
 * Author: PodBuzzz.com
 * Author URI:        https://www.podbuzzz.com
 * Version: 1.0
 */

require_once( __DIR__ . '/classes/settings-api.php' );
require_once( __DIR__ . '/classes/settings-page.php' );
require_once( __DIR__ . '/classes/inline-script.php' );

new Settings_Page();
new Inline_Script();
