✅ Task 4 – Basic WordPress Plugin
You'll create a working plugin from scratch that:

Adds a custom message to the admin dashboard

Uses an action hook

Has proper file structure and header

Instructions

1. Create Plugin Folder
   In your local WP install:

bash
Copy
Edit
wp-content/plugins/custom-greeter/ 2. Create Plugin File
Inside that folder, create:

vbnet
Copy
Edit
custom-greeter.php
With this structure:

php
Copy
Edit

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
3. Activate Plugin
Go to WP Admin → Plugins

Activate “Custom Greeter”

Check the dashboard — you should see the greeting
