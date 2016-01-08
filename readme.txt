=== Debugging WP ===
Contributors: tutv95
Donate link: http://tutran.me
Tags: debug, develop
Requires at least: 3.8
Tested up to: 4.4.1
Stable tag: 4.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Debugging helper for WordPress Developers.

== Description ==

Plugin was built based on [Kint Project](http://raveren.github.io/kint/).

= Introduction to Kint =

At first glance Kint is just a pretty replacement for **var_dump()**, **print_r()** and **debug_backtrace()**.

However, it's much, much more than that. Even the excellent xdebug var_dump improvements don't come close - you will eventually wonder how you developed without it.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/debugging-wp` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


== Frequently Asked Questions ==

= How to use? =

Use functions to debug: **s**, **sd**, **d**, **ddd**

Example:
`<?php s($GLOBALS); ?>`

== Screenshots ==

`/assets/screenshots/debugging-01.png`
`/assets/screenshots/debugging-02.png`

== Changelog ==

= 1.0.0 =
* Initialize plugin

== Upgrade Notice ==

= 1.0.0 =
Upgrade immediately.