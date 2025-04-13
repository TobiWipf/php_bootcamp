✅ Task 5 – Activation Hook + Logging
Add an activation hook to your plugin:

1. Register Hook
   In custom-greeter.php:

php
Copy
Edit
register_activation_hook(**FILE**, 'custom_greeter_activate');

function custom_greeter_activate() {
error_log('Custom Greeter plugin activated at ' . date('c'));
}
