=== azurecurve Get Plugin Info ===
Contributors: azurecurve
Donate link: http://development.azurecurve.co.uk/support-development/
Author URI: http://development.azurecurve.co.uk/
Plugin URI: http://development.azurecurve.co.uk/plugins/get-plugin-info/
Tags: plugin, info, information, shortcode, WordPress,ClassicPress
Requires at least: 3.4
Tested up to: 5.0.0
Stable tag: 2.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcodes available to get plkugin information from Wordpress.org using the plugin.api.

== Description ==
Shortcodes available to get plkugin information from Wordpress.org using the plugin.api.

Parameter of slug is passed to the shortcode; the slug is the name of the plugin (for example, for this plugin, the slug is azurecurve-get-plugin-info). For example, to get information on the  <em>azurecurve Toggle Show/Hide</em> plugin the slug of <em>azurecurve-toggle-showhide</em> would be passed.

The available shortcodes are:
<ul>
<li><strong>getpluginname</strong></li>
<li><strong>getpluginactiveinstalls</strong> - number of active installs</li>
<li><strong>getpluginauthor</strong> - automatically linked back to the authors Wordpress.org profile</li>
<li><strong>getpluginauthorprofile</strong> - address of author profile on WordPress.org</li>
<li><strong>getpluginhomepage</strong> - address of developers website</li>
<li><strong>getpluginrepository</strong> - address of theplugin on the WordPress Plugin Repository</li>
<li><strong>getplugindescription</strong></li>
<li><strong>getpluginadded</strong> - date plugin was added to the Wordpress Plugin repository</li>
<li><strong>getplugindownloaded</strong> - number of times the plugin has been downloaded</li>
<li><strong>getpluginsupportthreads</strong> - number of support threads</li>
<li><strong>getpluginratings</strong> - shows rating with text; e.g. 5 stars (120)</li>
<li><strong>getpluginstarratings</strong> - shows star image rating</li>
<li><strong>getpluginrating</strong></li>
<li><strong>getplugininstallation</strong> - installation instructions</li>
<li><strong>getpluginchangelog</strong> - changelog</li>
<li><strong>getpluginfaq</strong> - faq</li>
<li><strong>getplugindonatelink</strong> - donate link</li>
<li><strong>getplugintags</strong> - list of hyperlinked tags</li>
</ul>

CSS formatting can be used to change appearence of links and tags.

== Installation ==
1. Download and extract the azurecurve-plugin-info plugin files.
2. Upload the azurecurve-plugin-info directory to the /wp-content/plugins/ directory.
3. Activate the plugin under the Plugins menu in the WordPress administration panel.

== Frequently Asked Questions ==
= Is this plugin compatible with both WordPress and ClassicPress? =
* Yes, this plugin will work with both.

== Changelog ==
Changes and feature additions for the Plugin Info plugin:
= 2.0.2 =
* Move menu to includes folder for easier maintenance
= 2.0.1 =
* Move menu to includes folder for easier maintenance
= 2.0.0 =
* Add azurecurve menu
= 1.0.0 =
* Initial release