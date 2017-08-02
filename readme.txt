=== Excerpt Old Posts ===
Contributors: jongalloway 
Donate link:http://herdingcode.com
Tags: feeds,feedburner
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: trunk

Shows excerpted content for older posts. This allows more items in the feed while working around the Feedburner 512K feed limit.

== Description ==

WordPress feeds offer a choice between Full Text or Summary. The Full Text option is preferable in a lot of cases (e.g. for a podcast), but the feed can grow very large.

One problem with a large feed is that if can exceed the <a href=\"http://support.google.com/feedburner/bin/answer.py?hl=en&answer=79009\">Feedburner 512K limit</a>. Your feed may be valid when you first set it up, but eventually when your feed gets big enough, Feedburner will stop updating.

This plugin gives you another setting (available on your Settings / Reading admin page) which sets how many posts should have Full Text. All posts after that will be shown as Summary. This gives you the best of both options - Full Text for new posts, and Summary for older posts. 

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

A new setting will be added to the Reading settings which allows setting the number of posts for which full contents should be displayed. If not set, the default value is 50.
== Screenshots ==
1. New settings option, available on the Settings / Reading page.


==Readme Generator== 

This Readme file was generated using <a href = 'http://sudarmuthu.com/wordpress/wp-readme'>wp-readme</a>, which generates readme files for WordPress Plugins.