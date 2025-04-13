<?php
/*
Plugin Name: Custom Greeter
Description: Shows a greeting on the admin dashboard.
Version: 1.0
Author: You
*/

// Simlinked to the plugin directory

register_activation_hook(__FILE__, 'custom_greeter_activate');

function custom_greeter_activate()
{
  error_log('Custom Greeter plugin activated at ' . date('c'));
}

add_action('admin_notices', function () {
  echo '<div class="notice notice-success is-dismissible"><p>Hello, Developer! Welcome back.</p></div>';
});