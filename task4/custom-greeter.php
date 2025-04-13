<?php
/*
Plugin Name: Custom Greeter
Description: Shows a greeting on the admin dashboard.
Version: 1.0
Author: You
*/

add_action('admin_notices', function () {
  echo '<div class="notice notice-success is-dismissible"><p>Hello, Developer! Welcome back.</p></div>';
});