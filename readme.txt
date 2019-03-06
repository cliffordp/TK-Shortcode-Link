=== TK Shortcode Link ===
Contributors: cliffpaulick
Tags: shortcode, link, target, utility
Requires at least: 2.5.1
Tested up to: 5.1
Stable tag: 1.2.1
License: GPL version 3 or any later version
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Create links with a shortcode. It's that simple.

== Description ==

Create links with a shortcode. Comes in handy in places where HTML tags aren't allowed and/or keep getting encoded or something.

Basically, just a utility plugin.

= Accepts 3 parameters: =
* url
* target (automatically adds the leading underscore)
* class

= Examples: =
* `[tklink url="https://www.nike.com/"]Just do it[/tklink]`
	* Outputs: `<a class="tklink" href="https://www.nike.com/">Just do it</a>`
* `[tklink url="https://www.wordpress.org/"][/tklink]`
	* Outputs: `<a class="tklink" href="https://www.wordpress.org/">https://www.wordpress.org/</a>`
* `[tklink url="https://www.google.com/" class="googlie" target="blank"]A googglie Google link that will open in a new tab[/tklink]`
	* Outputs: `<a class="googlie" href="https://www.google.com/" target="_blank">A googglie Google link that will open in a new tab</a>`

Developers may contribute at https://github.com/cliffordp/tk-shortcode-link

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
1. Activate one of the default WordPress themes (e.g. Twenty Nineteen)
1. Enable WP_DEBUG in wp-config.php.

If you no longer have an error, your issue is not with this plugin.

If you definitely have an issue with this plugin, please submit a detailed explanation and/or screenshot under this plugin's Support tab on WordPress.org.

== Screenshots ==

No screenshots necessary. Each theme's links are styled differently.

== Changelog ==

= 1.2.1 =
* March 5, 2019
* Now passes the shortcode name to `shortcode_atts()` to allow filtering this plugin's shortcode.
* Now escapes additional output.
* Now displays the URL as the anchor text if the shortcode's content is empty. (Still requires the closing shortcode tag.)
* Fix capability required to display error message.
* License changed from GPLv2+ to GPLv3+.
* Readme compatibility changed to WordPress version 5.1

= 1.2 =
* April 28, 2015
* Readme compatibility changed to WordPress version 4.2.1

= 1.1 =
* August 30, 2013
* Now uses `tklink` instead of `link` due to being too generic (e.g. conflicts with PageLines Theme)
* **You MUST change any and all existing shortcodes manually.** This should not have to change again.

= 1.0 =
* August 19, 2013
* Initial release