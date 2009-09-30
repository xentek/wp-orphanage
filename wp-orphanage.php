<?php
/*
	Plugin Name: WP-Orphanage
	Plugin URI: http://xentek.net/code/wordpress/plugins/wp-orphanage/
	Description: Plugin to promote users with no roles set (the orphans) to the Subscriber role. Their role is upgraded when they login. Orphans are created when using the Shared User Table approach to tying wordpress sites together (and possibly when integrating bbPress into a WP site).
	Version: 0.5
	Author: Eric Marden
	Author URI: http://xentek.net/

	Copyright 2008  Eric Marden  (email : wp@xentek.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_action('init','wporphanage_load_translation');
add_action('admin_menu','add_wporphanage_options_page');
add_action('wp_login','adopt_this_orphan');
add_action('load-users.php','adopt_all_orphans');

function wporphanage_load_translation()
{
	load_plugin_textdomain('wporphanage', WP_PLUGIN_DIR.'/'.dirname(plugin_basename(__FILE__)));
}

function add_wporphanage_options_page()
{
	if (function_exists('add_options_page'))
	{
		add_options_page('options-general.php', 'WP Orphanage', 'WP Orphanage', 10, 'wp-orphanage', WP_PLUGIN_DIR.'/'.dirname(__FILE__) . '/wp-orphanage-options.php');
	}
}

function adopt_this_orphan()
{
	global $user_ID;
	get_currentuserinfo();

	if ( !current_user_can('read') ) {
		$user = new WP_User($user_ID);
		$user->set_role('subscriber');
	}
}

function adopt_all_orphans()
{
	// Query the users
	$wp_user_search = new WP_User_Search();
	foreach ( $wp_user_search->get_results() as $userid ) {
		$user = new WP_User($userid);
		if ( !$user->has_cap('read') ) {
			$user->set_role('subscriber');
		}
	}
}
?>
