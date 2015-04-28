=== Plugin Name ===
Contributors: cliffpaulick
Tags: shortcode, link, target, utility
Requires at least: 2.5.1
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create links with a shortcode. It's that simple.

== Description ==

Create links with a shortcode. Comes in handy in places where HTML tags aren't allowed and/or keep getting encoded or something.

Basically, just a utility plugin.

= Accepts 3 parameters: =
* url
* target (automatically adds the leading underscore)
* class

= Examples: =
* [tklink url="http://www.nike.com/"]Just do it[/tklink]
	* Outputs: `<a class="tklink" href="http://www.nike.com/">Just do it</a>`
* [tklink url="http://www.pagelinestheme.com/" target="blank"]Open PageLinesTheme.com in a new window[/tklink]
	* Outputs: `<a class="tklink" href="http://www.pagelinestheme.com/" target="_blank">Open PageLinesTheme.com in a new window</a>`
* [tklink url="http://www.google.com/" class="googlie" target="parent"]A googglie Google link with parent target[/tklink]
	* Outputs: `<a class="googlie" href="http://www.google.com/" target="_parent">A googglie Google link with parent target</a>`

= FYI: =
* All links have a class of `tklink` added unless you specify your own class per link (see examples above)
* No styling of `tklink` or otherwise is added via this plugin.
* If you don't know what classes are, you can ignore. It's for styling (i.e. look and feel).

== Frequently Asked Questions ==

**Any known incompatibilities?**

It shouldn't conflict with any other themes or plugins and may have duplicate functionality of something else you already have.

= What if I find an error? =

Please follow these steps to troubleshoot:

1. Disable all other plugins
1. Activate either the Twenty Twelve or Twenty Thirteen WordPress theme (your choice)
1. Enable WP_DEBUG in wp-config.php.

If you no longer have an error, your issue is not with this plugin.

If you definitely have an issue with this plugin, please submit a detailed explanation and/or screenshot under this plugin's Support tab on WordPress.org.

== Screenshots ==

No screenshots necessary. Each theme's links are styled differently.

== Changelog ==

= 1.1 =
* Now uses `tklink` instead of `link` due to being too generic (e.g. conflicts with PageLines Theme)
* **You MUST change any and all existing shortcodes manually.** This should not have to change again.
= 1.0.20130816 =
* Initial release