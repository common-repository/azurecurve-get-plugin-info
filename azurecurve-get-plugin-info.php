<?php
 /*
Plugin Name: azurecurve Get Plugin Info
Plugin URI: http://development.azurecurve.co.uk/plugins/get-plugin-info/
Description: Display info for a plugin using a shortcode.
Version: 2.0.2
Author: azurecurve
Author URI: http://development.azurecurve.co.uk/

Text Domain: azc_gpi
Domain Path: /languages

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The full copy of the GNU General Public License is available here: http://www.gnu.org/licenses/gpl.txt

*/

//include menu
require_once( dirname(  __FILE__ ) . '/includes/menu.php');

function azc_gpi_load_css(){
	wp_enqueue_style( 'azc_gpi', plugins_url( 'style.css', __FILE__ ), '', '1.0.0' );
}
add_action('wp_enqueue_scripts', 'azc_gpi_load_css');

if( ! is_admin() ) {
	if ( ! function_exists( 'plugins_api' ) ){
		require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
	}
}

function azc_gpi_getpluginactiveinstalls($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'active_installs' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			if ( $api->active_installs >= 1000000 ) {
				$active_installs_text = _x( '1+ Million', 'Active plugin installations' );
			} elseif ( 0 == $api->active_installs ) {
				$active_installs_text = _x( 'Less Than 10', 'Active plugin installations' );
			} else {
				$active_installs_text = number_format_i18n( $api->active_installs ) . '+';
			}
			$return .= $active_installs_text;
		}
	}
	return $return;
}
add_shortcode( 'getpluginactiveinstalls', 'azc_gpi_getpluginactiveinstalls' );

function azc_gpi_getpluginname($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'name' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->name;
		}
	}
	return $return;
}
add_shortcode( 'getpluginname', 'azc_gpi_getpluginname' );

function azc_gpi_getpluginauthor($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'author' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->author;
		}
	}
	return $return;
}
add_shortcode( 'getpluginauthor', 'azc_gpi_getpluginauthor' );

function azc_gpi_getpluginauthorprofile($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'author_profile' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->author_profile;
		}
	}
	return $return;
}
add_shortcode( 'getpluginauthorprofile', 'azc_gpi_getpluginauthorprofile' );

function azc_gpi_getpluginrequires($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'requires' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->requires;
		}
	}
	return $return;
}
add_shortcode( 'getpluginrequires', 'azc_gpi_getpluginrequires' );

function azc_gpi_getplugintested($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'tested' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->tested;
		}
	}
	return $return;
}
add_shortcode( 'getplugintested', 'azc_gpi_getplugintested' );

function azc_gpi_getpluginrequiresphp($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'requires_php' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->requires_php;
		}
	}
	return $return;
}
add_shortcode( 'getpluginrequiresphp', 'azc_gpi_getpluginrequiresphp' );

function azc_gpi_getpluginrating($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'rating' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->rating;
		}
	}
	return $return;
}
add_shortcode( 'getpluginrating', 'azc_gpi_getpluginrating' );

function azc_gpi_getpluginratings($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'ratings' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			foreach($api->ratings as $key => $value){
				$return .= '<p class="azc_gpi"><a href="https://wordpress.org/support/plugin/'.$slug.'/reviews/?filter='.$key.'"  class="azc_gpi">'.$key.' stars ('.$value.')</p>';
			}
		}
	}
	return $return;
}
add_shortcode( 'getpluginratings', 'azc_gpi_getpluginratings' );

function azc_gpi_getpluginstarratings($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'ratings' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			foreach($api->ratings as $key => $value){
				$return .= '<p class="azc_gpi"><a href="https://wordpress.org/support/plugin/'.$slug.'/reviews/?filter='.$key.'"  class="azc_gpi rating">';
				for ($starloop = 0; $starloop <= 4; $starloop++) {
					if ($starloop >= $key){
						$return .= '<img src="'.plugin_dir_url( __FILE__ ).'images/greystar.png" />';
					}else{
						$return .= '<img src="'.plugin_dir_url( __FILE__ ).'images/star.png" />';
					}
				}
				$return .= ' ('.$value.')</p>';
			}
		}
	}
	return $return;
}
add_shortcode( 'getpluginstarratings', 'azc_gpi_getpluginstarratings' );

function azc_gpi_getpluginnumratings($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'num_ratings' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->num_ratings;
		}
	}
	return $return;
}
add_shortcode( 'getpluginnumratings', 'azc_gpi_getpluginnumratings' );

function azc_gpi_getpluginsupportthreads($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'support_threads' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->support_threads;
		}
	}
	return $return;
}
add_shortcode( 'getpluginsupportthreads', 'azc_gpi_getpluginsupportthreads' );

function azc_gpi_getpluginsupporttreadsresolved($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'support_treads_resolved' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->support_treads_resolved;
		}
	}
	return $return;
}
add_shortcode( 'getpluginsupporttreadsresolved', 'azc_gpi_getpluginsupporttreadsresolved' );

function azc_gpi_getplugindownloaded($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'downloaded' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= number_format_i18n($api->downloaded);
		}
	}
	return $return;
}
add_shortcode( 'getplugindownloaded', 'azc_gpi_getplugindownloaded' );

function azc_gpi_getpluginlastupdated($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'last_updated' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->last_updated;
		}
	}
	return $return;
}
add_shortcode( 'getpluginlastupdated', 'azc_gpi_getpluginlastupdated' );

function azc_gpi_getpluginadded($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'added' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->added;
		}
	}
	return $return;
}
add_shortcode( 'getpluginadded', 'azc_gpi_getpluginadded' );

function azc_gpi_getpluginhomepage($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'homepage' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->homepage;
		}
	}
	return $return;
}
add_shortcode( 'getpluginhomepage', 'azc_gpi_getpluginhomepage' );

function azc_gpi_getpluginrepository($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$return .= 'https://wordpress.org/plugins/'.$slug;
	}
	return $return;
}
add_shortcode( 'getpluginrepository', 'azc_gpi_getpluginrepository' );

function azc_gpi_getplugindownloadlink($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'download_link' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->download_link;
		}
	}
	return $return;
}
add_shortcode( 'getplugindownloadlink', 'azc_gpi_getplugindownloadlink' );

function azc_gpi_getplugindonatelink($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'donate_link' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->donate_link;
		}
	}
	return $return;
}
add_shortcode( 'getplugindonatelink', 'azc_gpi_getplugindonatelink' );

function azc_gpi_getplugindescription($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'sections' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->sections['description'];
		}
	}
	return $return;
}
add_shortcode( 'getplugindescription', 'azc_gpi_getplugindescription' );

function azc_gpi_getplugininstallation($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'sections' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->sections['installation'];
		}
	}
	return $return;
}
add_shortcode( 'getplugininstallation', 'azc_gpi_getplugininstallation' );

function azc_gpi_getpluginfaq($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'sections' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->sections['faq'];
		}
	}
	return $return;
}
add_shortcode( 'getpluginfaq', 'azc_gpi_getpluginfaq' );

function azc_gpi_getpluginchangelog($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'sections' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$return .= $api->sections['changelog'];
		}
	}
	return $return;
}
add_shortcode( 'getpluginchangelog', 'azc_gpi_getpluginchangelog' );

function azc_gpi_getplugintags($atts, $content = null) {
	extract(
			shortcode_atts(array(
								'slug' => ''
								)
							
			, $atts
			));
	
	$return = '';
	$slug = esc_html( stripslashes ( $slug ) );
	if (strlen($slug) > 0){
		$api = plugins_api( 'plugin_information', array(
														'slug' => $slug,
														'fields' => array( 'sections' => true )
							) );
		
		if( ! is_wp_error( $api ) ) {
			$first = true;
			foreach ($api->tags as $key => $value){
				if ($first == true){
					$first = false;
				}else{
					$return .= '&nbsp';
				}
				$return .= '<a href="https://wordpress.org/plugins/tags/'.$key.'" class="azc_gpi_rating">'.$value.'</a>';
			}
		}
	}
	return $return;
}
add_shortcode( 'getplugintags', 'azc_gpi_getplugintags' );

function azc_create_gpi_plugin_menu() {
	global $admin_page_hooks;
    
	add_submenu_page( "azc-plugin-menus"
						,"Get Plugin Info"
						,"Get Plugin Info"
						,'manage_options'
						,"azc-gpi"
						,"azc_gpi_settings" );
}
add_action("admin_menu", "azc_create_gpi_plugin_menu");

function azc_gpi_settings() {
	if (!current_user_can('manage_options')) {
		$error = new WP_Error('not_found', __('You do not have sufficient permissions to access this page.' , 'azc_gpi'), array('response' => '200'));
		if(is_wp_error($error)){
			wp_die($error, '', $error->get_error_data());
		}
    }
	?>
	<div id="azc-t-general" class="wrap">
			<h2>azurecurve Get Plugin Info</h2>

				<table class="form-table">
					<tr>
						<th scope="row" colspan="2">
							<label for="explanation">
								azurecurve BBCode <?php _e('provides the following shortcodes for retrieving information from the WordPress Plugin Repository:', 'azc_gpi'); ?>
							</label>
						</th>
					</tr>
					<tr>
						<th scope="row" colspan="2">
							<label for="explanation">
								azurecurve BBCode <?php _e('Parameter of slug is passed to the shortcode; the slug is the name of the plugin (for example, for this plugin, the slug is azurecurve-get-plugin-info). For example, to get information on the  <em>azurecurve Toggle Show/Hide</em> plugin the slug of <em>azurecurve-toggle-showhide</em> would be passed:', 'azc_gpi'); ?>
							</label>
						</th>
					</tr>
					<tr><th scope="row">getpluginname</th><td>Full name of plugin</td></tr>
					<tr><th scope="row">getpluginactiveinstalls</th><td>Number of active installs</td></tr>
					<tr><th scope="row">getpluginauthor</th><td>Automatically linked back to the authors Wordpress.org profile</td></tr>
					<tr><th scope="row">getpluginauthorprofile</th><td>Address of author profile on WordPress.org</td></tr>
					<tr><th scope="row">getpluginhomepage</th><td>Address of developers website</td></tr>
					<tr><th scope="row">getpluginrepository</th><td>Address of theplugin on the WordPress Plugin Repository</td></tr>
					<tr><th scope="row">getplugindescription</th><td>Description of plugin</td></tr>
					<tr><th scope="row">getpluginadded</th><td>Date plugin was added to the Wordpress Plugin repository</td></tr>
					<tr><th scope="row">getplugindownloaded</th><td>Number of times the plugin has been downloaded</td></tr>
					<tr><th scope="row">getpluginsupportthreads</th><td>Number of support threads</td></tr>
					<tr><th scope="row">getpluginratings</th><td>Shows rating with text; e.g. 5 stars (120)</td></tr>
					<tr><th scope="row">getpluginstarratings</th><td>Shows star image rating</td></tr>
					<tr><th scope="row">getpluginrating</th><td>Show rating out of 100</td></tr>
					<tr><th scope="row">getplugininstallation</th><td>Installation instructions</td></tr>
					<tr><th scope="row">getpluginchangelog</th><td>Changelog</td></tr>
					<tr><th scope="row">getpluginfaq</th><td>FAQ</td></tr>
					<tr><th scope="row">getplugindonatelink</th><td>Donate link</td></tr>
					<tr><th scope="row">getplugintags</th><td>List of hyperlinked tags</td></tr>
					<tr>
						<th scope="row" colspan="2">
							<label for="additional-plugins">
								azurecurve <?php _e('has the following plugins which allow shortcodes to be used in comments and widgets:', 'azc_gpi'); ?>
							</label>
							<ul class='azc_plugin_index'>
								<li>
									<?php
									if ( is_plugin_active( 'azurecurve-shortcodes-in-comments/azurecurve-shortcodes-in-comments.php' ) ) {
										echo "<a href='admin.php?page=azc-sic' class='azc_plugin_index'>Shortcodes in Comments</a>";
									}else{
										echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-comments/' class='azc_plugin_index'>Shortcodes in Comments</a>";
									}
									?>
								</li>
								<li>
									<?php
									if ( is_plugin_active( 'azurecurve-shortcodes-in-widgets/azurecurve-shortcodes-in-widgets.php' ) ) {
										echo "<a href='admin.php?page=azc-siw' class='azc_plugin_index'>Shortcodes in Widgets</a>";
									}else{
										echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-widgets/' class='azc_plugin_index'>Shortcodes in Widgets</a>";
									}
									?>
								</li>
							</ul>
						</th>
					</tr>
				</table>
	</div>
<?php }

?>