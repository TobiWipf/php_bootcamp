A three day bootcamp to get to know php. Generated with Chatgpt.

Day 1 – PHP Core + WordPress Internals
Goal: Master PHP syntax and understand WordPress architecture.

Topics:

PHP syntax, OOP, namespaces, Composer

WordPress architecture: hooks (actions/filters), themes, plugins

Plugin folder structure and plugin header

WordPress global functions (add_action, add_filter, get_option, wp_query, etc.)

Tasks:

Write basic functions using PHP arrays, loops, classes

Create a “Hello World” plugin that adds a custom admin notice

Use add_action to hook into admin_notices

Day 2 – Plugin Development & WP Backend APIs
Goal: Build and interact with WP using its APIs.

Topics:

Options API, Settings API

Shortcodes

WP REST API (registering custom endpoints)

Custom post types

Enqueueing scripts and styles

Security (nonces, sanitization, validation)

Tasks:

Build a plugin that creates a custom settings page and stores data using the Options API

Register a REST API endpoint (e.g., /wp-json/yourplugin/v1/data)

Create a custom post type (e.g., “Book” or “Note”)

Day 3 – Real Plugin Project + Laravel Parallel
Goal: Deliver a complete mini plugin and match Laravel-style code quality.

Topics:

Structuring larger plugins (OOP, autoloading with Composer)

Localization

WP Cron

Writing unit tests for plugins with WP test suite

Compare Laravel vs WP in DI, MVC, and routing

Tasks:

Build a plugin with:

Admin UI to submit a form

Saves data to custom post type or options

Exposes the data via a custom REST endpoint

Add security (nonces, capability checks)

Write a simple test using WP_UnitTestCase
