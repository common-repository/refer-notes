=== Refer Notes ===
Contributors: bbodine1, snumb130
Tags: refer, referral, message, messages, social, notify
Version: 1.0
Requires at least: 2.3
Tested up to: 2.5.1
Stable tag: 1.1

Displays a custom message at the top of your site to welcome users who are referred from other specific sites such as Digg, Reddit and Stumbleupon.

== Description ==

Refer notes is a Wordpress plugin that is used to display a custom welcome message to site visitors who are referred to your site from other specific site domains such as Digg, Reddit and Stumbleupon. 

When a visitor comes to your site from one of the many social networks, a message will be displayed across the top or your site welcoming them from the site that sent them to you. For example, if a user stumbled to your site from stumbleupon, a message saying,"Welcome Stumbleupon user! If you like this article please consider giving us a thumbs up. Thanks!" Each message can be customized to say anything you want.

Options are available for styling your message and the message container. When activated the container sits accross the top of your page and is fixed so it stays present even if the visitor scrolls down the page. The container has a close button that will allow the visitor to slide it up and out of view.

Currently supports more than 20 social websites and 3 search engines. There are 5 custom referrals that can be added so if one of the sites you would like to support is not here you can quickly add it through the options page. 

Alternately, you can use the New User option to display a message to any site visitor being referred to your site from any other site except your own because you don't want it popping up every time change pages around your site.

Some sites like Digg and Reddit support custom buttons to display the current Diggs or Points for a specific page or article. Options are available to use a large or small button or disable this feature all together. Most current sites include a custom favicon type icon specific to the referral site.

== Installation ==

== Installation ==
1. Upload `refer-notes` folder to the `/wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

	When updating you will need to deactivate and reactivate the plugin.
	
3. Use Refer Notes options page under the Wordpress Settings submenu

== Screenshots ==

1. Activated using a refer from dig.
2. Options page.
3. Where to find the options page.

== Frequently Asked Questions ==

= The plugin did not activate and gives a fatal error "failed to open stream: No such file or directory"  =

All plugin files must be in the wordpress plugin file directory wp-content/plugins in folder "refer-notes". Spelled exactly. Can not change this name.

= I am using a local server and the plugin does not appear to be working. Whats wrong? =

The plugin does not work for local servers. A testing option may be added in the future to allow simulation of referrals.

= The plugin activated and appears to work fine but I can not get it to display a message even when I know it should."  =

Check to make sure that your theme is using the wp_footer and wp_head tags. These tags are located in each specific theme in the header and footer files. In the header file the code `<?php wp_head ?>` should be located between the <head></head> tags. In the footer file the code `<?php wp_footer ?>` should be directly before the </body> tag.